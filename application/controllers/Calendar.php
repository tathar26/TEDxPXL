<?php

class Calendar extends CI_Controller {

	function display($year = null, $month = null) {

		if (!$year) {
			$year = date('Y');
		}
		if (!$month) {
			$month = date('m');
		}

		$this -> load -> model('Calendar_Model');

		if ($day = $this -> input -> post('day')) {
			$this -> Calendar_Model -> add_calendar_date("$year-$month-$day", $this -> input -> post('data'));
		}

		$data['calendar'] = $this -> Calendar_Model -> generate($year, $month);

		$this -> load -> view('head_calendar');
		$this -> load -> view('menu');
		$this -> load -> view('calendar_view', $data);
		$this -> load -> view('footer');
	}

}
