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
		$page = 1;
		if ($this->input->get()) {
			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			}
		}
		$result = 10;
		$order = array();
		if ($this->input->get('pagination')) {
			$result = $this->input->get('pagination');
			if ($this->input->get('sort')) {
				$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
				$this->data['sorting'] = $this->input->get();
			}
		}
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count();
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page);
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function category($id)
	{
		$page = 1;
		if ($this->input->get()) {
			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			}
		}
		$result = 10;
		$order = array();
		if ($this->input->get('pagination')) {
			$result = $this->input->get('pagination');
			if ($this->input->get('sort')) {
				$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
				$this->data['sorting'] = $this->input->get();
			}
		}
		//echo $result;die;
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('type',$id);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'type',$id);
		//echo '<pre>';print_r($this->data['listing']);echo '</pre>';
		//print_r($this->db->last_query());die;
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function location($id)
	{
		$page = 1;
		if ($this->input->get()) {
			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			}
		}
		$result = 10;
		$order = array();
		if ($this->input->get('pagination')) {
			$result = $this->input->get('pagination');
			if ($this->input->get('sort')) {
				$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
				$this->data['sorting'] = $this->input->get();
			}
		}
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('location',$id);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'location',$id);
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function auction($id)
	{
		$page = 1;
		if ($this->input->get()) {
			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			}
		}
		$result = 10;
		$order = array();
		if ($this->input->get('pagination')) {
			$result = $this->input->get('pagination');
			if ($this->input->get('sort')) {
				$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
				$this->data['sorting'] = $this->input->get();
			}
		}
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('auction',$id);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'auction',$id);
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function detail($id)
	{
		$this->data['detail'] = $this->listing_model->get_detail($id);
		$this->load->front_template('inventory/detail',$this->data);
	}

	public function search()
	{
		$page = 1;
		if ($this->input->get()) {
			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			}
		}
		$this->data['current_page'] = $page;
		$query = array();
		if ($this->input->post() && !$this->input->post('pagination')) {
			$data = $this->input->post();
			$this->session->set_userdata('search', $data);
		}
		elseif ($this->session->userdata('search')) {
			$data = $this->session->userdata('search');
		}
		$result = 10;
		$order = array();
		if ($this->input->get('pagination')) {
			$result = $this->input->get('pagination');
			if ($this->input->get('sort')) {
				$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
				$this->data['sorting'] = $this->input->get();
			}
		}
		if (isset($data['make'])) {
			$query['makes.Name'] = $data['make'];
		}
		if (isset($data['location'])) {
			$query['locations.Location'] = $data['location'];
		}
		if (isset($data['search'])) {
			$query['title'] = $data['search'];
		}
		if (isset($data['type'])) {
			$query['vehicle_type.Name'] = $data['type'];
		}
		if (isset($data['start_year'])) {
			$query['inventory.Year >='] = $data['start_year'];
		}
		if (isset($data['end_year'])) {
			$query['inventory.Year <='] = $data['end_year'];
		}
		if (isset($data['min'])) {
			$query['inventory_bids.bid >='] = $data['min'];
		}
		if (isset($data['max'])) {
			$query['inventory_bids.bid <='] = $data['max'];
		}
		if (isset($data['model'])) {
			$query['models.Name'] = $data['model'];
		}
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('search',$query);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'search',$query);
		//print_r($this->db->last_query());die;
		$this->load->front_template('inventory/listing',$this->data);
	}
}
