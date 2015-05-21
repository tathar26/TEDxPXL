<?php

class Calendar_model extends CI_Model {
	var $conf;

	function Calendar_model() {
		parent::__construct();

		$this -> conf = array('start_day' => 'monday', 'show_next_prev' => true, 'next_prev_url' => site_url("calendar/display"));
		$this -> conf['template'] = '
				{table_open}<table class="calendar">{/table_open}
			        {week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
				{cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
				{cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
				{cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
				{cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
			';
	}

	function get_calendar_data($year, $month) {

		$query = $this -> db -> select('date, data') -> from('calendar') -> like('date', "$year-$month", 'after') -> get();

		$cal_data = array();

		foreach ($query->result() as $row) {
        if(substr($row->date,8,1)==0)
        {
            $cal_data[substr($row->date,9,1)] = $row->data;
        }
        else{
        $cal_data[substr($row->date,8,2)] = $row->data;
        }
    }

		return $cal_data;
	}

	function add_calendar_date($date, $data){
		
		if ($this->db->select('date')->from('calendar')->where('date',$date)->count_all_results()){
			
			$this->db->where('date',$date)->update('calendar',array(
				'date'=>$date,
				'data'=>$data
			));
			
		}else{
			
			$this->db->insert('calendar',array(
				'date'=>$date,
				'data'=>$data
			));
			
		}
		
	}

	function generate($year, $month) {

		$this -> load -> library('calendar', $this -> conf);
		
		$this->add_calendar_date('2015-05-02', 'some more testing');

		$cal_data = $this -> get_calendar_data($year, $month);

		return $this -> calendar -> generate($year, $month, $cal_data);
	}

}
