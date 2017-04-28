<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends MY_Controller {

	function index()
	{
		$data = array(
				3  => 'Draft Robot Plans',
				7  => 'Delivery of Robot Parts',
				13 => 'Construction Finished',
				26 => 'Kill All Humans!'
		);

		$this->load->library('calendar');

		$vars['calendar'] = $this->calendar->generate('', '', $data);

		$this->load->view('templates/header');
		$this->load->view('calendar/index', $vars);
		$this->load->view('templates/footer');
	}
}