<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('locations_model');
    }

	public function index()
	{
		if ($this->input->post()) {
			$state = $this->input->post('state');
			$start = date('Y-m-d 00:00:01', strtotime($this->input->post('date')));
			$end = date('Y-m-d 23:59:59', strtotime($this->input->post('date')));
			$this->data['locations'] = $this->locations_model->get_locations($state,$start,$end);
			$this->data['form'] = $this->input->post();
		}
		else{
			$this->data['locations'] = $this->locations_model->all_rows('locations');
		}
		$this->data['states'] = $this->locations_model->get_state();
		$this->load->front_template('auction/locations',$this->data);
	}

}