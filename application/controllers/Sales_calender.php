<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_calender extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auctions_model');
    }

	public function index()
	{
		$this->data['auctions'] = $this->auctions_model->get_calender();
		$this->load->front_template('auction/calender',$this->data);
	}

}