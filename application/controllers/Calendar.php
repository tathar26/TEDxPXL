<?php

class Calendar extends CI_Controller {

	function display($year = null, $month = null) {

		$this -> load -> model('Calendar_Model');
		$data['calendar'] = $this -> Calendar_Model -> generate($year, $month);

		$this -> load -> view('head_calendar');
		$this -> load -> view('menu');
		$this -> load -> view('calendar_view', $data);
		$this -> load -> view('footer');
	}

	public function newEvent() {
		$this -> load -> view('head_calendar');
		$this -> load -> view('newEvent');
		$this -> load -> view('footer');

	}

}
