<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('listing_model');
    }

	public function index()
	{
		$this->data['listing'] = $this->listing_model->get_inventory();
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function category($id)
	{
		$this->data['listing'] = $this->listing_model->get_inventory('type',$id);
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function location($id)
	{
		$this->data['listing'] = $this->listing_model->get_inventory('location',$id);
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function auction($id)
	{
		$this->data['listing'] = $this->listing_model->get_inventory('auction',$id);
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function detail($id)
	{
		$this->data['detail'] = $this->listing_model->get_detail($id);
		$this->load->front_template('inventory/detail',$this->data);
	}

	public function search()
	{
		$query = array();
		$data = $this->input->post();
		if (isset($data['make'])) {
			$query['inventory.Make'] = $data['make'];
		}
		if (isset($data['location'])) {
			$query['locations.id'] = $data['location'];
		}
		if (isset($data['search'])) {
			$query['title'] = $data['search'];
		}
		$this->data['listing'] = $this->listing_model->get_inventory('search',$query);
		//print_r($this->db->last_query());die;
		$this->load->front_template('inventory/listing',$this->data);
	}
}
