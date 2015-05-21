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

	function generate($year, $month) {

		$this -> load -> library('calendar', $this -> conf);

		$cal_data = array(15 => 'foo', 17 => 'bar');

		return $this -> calendar -> generate($year, $month, $cal_data);
	}

}
