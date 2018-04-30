<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_auctions extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('listing_model');
    }

	public function index()
	{
		$this->data['listing'] = $this->listing_model->get_live_listing();
		$this->load->front_template('auction/live',$this->data);
	}

}