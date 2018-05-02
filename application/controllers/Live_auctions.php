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
		if (empty($this->data['listing'])) {
			$this->data['next'] = $this->listing_model->get_row_single('auctions',array('Live'=>'Yes','Date >='=>date('Y-m-d', strtotime('1 day'))));
		}
		$this->load->front_template('auction/live',$this->data);
	}

	public function auction($id)
	{
		$this->data['listing'] = $this->listing_model->get_live_listing('auction',$id);
		if (empty($this->data['listing'])) {
			$this->data['next'] = $this->listing_model->get_row_single('auctions',array('Live'=>'Yes','Date >='=>date('Y-m-d', strtotime('1 day'))));
		}
		$this->load->front_template('auction/live',$this->data);
	}

}