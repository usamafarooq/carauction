<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('listing_model');
        $this->get_search_filters();
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
		$this->data['search'] = array('vehicle_type'=>$id);
		//echo $result;die;
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('type',$id);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'type',$id);
		//echo '<pre>';print_r($this->data['listing']);echo '</pre>';die;
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
		$this->data['location'] = $this->listing_model->get_row_single('locations',array('id'=>$this->data['detail']['location_id']));
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
			//echo '<pre>';print_r($this->input->post());echo '</pre>';die;
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
		$search = array();
		if (isset($data['make']) && !empty($data['make'])) {
			$query['makes.Name'] = $data['make'];
			$search['make'] = $this->listing_model->get_row_single('makes',array('Name'=>$data['make'])); 
			$search['make'] = $search['make']['id'];
		}
		if (isset($data['location']) && !empty($data['location'])) {
			$query['locations.Location'] = $data['location'];
		}
		if (isset($data['search']) && !empty($data['search'])) {
			$query['title'] = $data['search'];
		}
		if (isset($data['type']) && !empty($data['type'])) {
			$query['vehicle_type.Name'] = $data['type'];
			$search['vehicle_type'] = $this->listing_model->get_row_single('vehicle_type',array('Name'=>$data['type'])); 
			$search['vehicle_type'] = $search['vehicle_type']['id'];
		}
		if (isset($data['start_year']) && !empty($data['start_year'])) {
			$query['inventory.Year >='] = $data['start_year'];
		}
		if (isset($data['end_year']) && !empty($data['end_year'])) {
			$query['inventory.Year <='] = $data['end_year'];
		}
		if (isset($data['min']) && !empty($data['min'])) {
			$query['inventory_bids.bid >='] = $data['min'];
		}
		if (isset($data['max']) && !empty($data['mamaxke'])) {
			$query['inventory_bids.bid <='] = $data['max'];
		}
		if (isset($data['model']) && !empty($data['model'])) {
			$query['models.Name'] = $data['model'];
			$search['model'] = $this->listing_model->get_row_single('models',array('Name'=>$data['model'])); 
			$search['model'] = $search['model']['id'];
		}
		if (isset($data['sale_date']) && !empty($data['sale_date'])) {
			$query['auctions.Date >='] = date('Y-m-d', strtotime($data['sale_date']));
		}
		if (isset($data['sale_date_to']) && !empty($data['sale_date_to'])) {
			$query['auctions.Date <='] = date('y-m-d', strtotime($data['sale_date_to']));
		}
		if (isset($data['posType']) && !empty($data['posType'])) {
			if (isset($data['location']) && !empty($data['location']) && $data['posType'] == 1) {
				$query['locations.Location <='] = $data['location'];
			}
			if (isset($data['state']) && !empty($data['state']) && $data['posType'] == 2) {
				$query['locations.State <='] = $data['state'];
			}
		}
		if (isset($data['saleDocument']) && !empty($data['saleDocument'])) {
			$query['inventory.Sale_Document'] = $data['saleDocument'];
		}
		if (isset($data['primary']) && !empty($data['primary'])) {
			$query['inventory.Damage_Type'] = $data['primary'];
		}
		if (isset($data['odometerStatus']) && !empty($data['odometerStatus'])) {
			$query['inventory.Odometer'] = $data['odometerStatus'];
		}
		if (isset($data['color']) && !empty($data['color'])) {
			$query['inventory.Exterior_Color'] = $data['color'];
		}
		if (isset($data['fuel']) && !empty($data['fuel'])) {
			$query['inventory.Fuel_Type'] = $data['fuel'];
		}
		if (isset($data['engineType']) && !empty($data['engineType'])) {
			$query['inventory.Engine'] = $data['engineType'];
		}
		if (isset($data['cylinders']) && !empty($data['cylinders'])) {
			$query['inventory.Cylinder'] = $data['cylinders'];
		}
		if (isset($data['transmission']) && !empty($data['transmission'])) {
			$query['inventory.Transmission'] = $data['transmission'];
		}
		if (isset($data['driveType']) && !empty($data['driveType'])) {
			$query['inventory.Driver_Type_'] = $data['driveType'];
		}
		if (isset($data['bodyStyle']) && !empty($data['bodyStyle'])) {
			$query['inventory.Body_Style'] = $data['bodyStyle'];
		}


		
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('search',$query);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'search',$query);
		if ($search) {
			$this->data['search'] = $search;
		}
		//print_r($this->db->last_query());die;
		//print_r($this->db->last_query());die;
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function saved_search($id)
	{
		$page = 1;
		if ($this->input->get()) {
			if ($this->input->get('page')) {
				$page = $this->input->get('page');
			}
		}
		$query = array();
		$this->data['current_page'] = $page;
		$result = 10;
		$order = array();
		if ($this->input->get('pagination')) {
			$result = $this->input->get('pagination');
			if ($this->input->get('sort')) {
				$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
				$this->data['sorting'] = $this->input->get();
			}
		}
		$search = array();
		$saved_search = $this->listing_model->get_save_search($id);
		if (!empty($saved_search['make'])) {
			$query['makes.Name'] = $saved_search['make'];
			$search['make'] = $this->listing_model->get_row_single('makes',array('Name'=>$saved_search['make'])); 
			$search['make'] = $search['make']['id'];
		}
		if (!empty($saved_search['vehicle_type'])) {
			$query['vehicle_type.Name'] = $saved_search['vehicle_type'];
			$search['vehicle_type'] = $this->listing_model->get_row_single('vehicle_type',array('Name'=>$saved_search['vehicle_type'])); 
			$search['vehicle_type'] = $search['vehicle_type']['id'];
		}
		if (!empty($saved_search['model'])) {
			$query['models.Name'] = $saved_search['model'];
			$search['model'] = $this->listing_model->get_row_single('models',array('Name'=>$saved_search['model'])); 
			$search['model'] = $search['model']['id'];
		}
		$this->data['result'] = $result;
		$this->data['current_page'] = $page;
		$this->data['total_rows'] = $this->listing_model->get_inventory_count('search',$query);
		$this->data['listing'] = $this->listing_model->get_inventory($order,$result,$page,'search',$query);
		if ($search) {
			$this->data['search'] = $search;
		}
		//print_r($this->db->last_query());die;
		//print_r($this->db->last_query());die;
		$this->load->front_template('inventory/listing',$this->data);
	}

	public function watch()
	{
		if ($this->input->post('id')) {
			$data['inventory_id'] = $this->input->post('id');
			$data['user_id'] = $this->session->userdata('user_id');
			$id = $this->listing_model->insert('watchlist',$data);
			if ($id) {
				echo 'done';
			}
			else{
				echo 'not';
			}
		}
		else{
			echo 'not';
		}
	}

	public function unwatch()
	{
		if ($this->input->post('id')) {
			$data['inventory_id'] = $this->input->post('id');
			$id = $this->listing_model->delete('watchlist',$data);
			if ($id) {
				echo 'done';
			}
			else{
				echo 'not';
			}
		}
		else{
			echo 'not';
		}
	}

	public function save_search()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$id = $this->listing_model->insert('save_search',$data);
			echo $id;
		}
	}

	public function update_save_search()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);
			$this->listing_model->update('save_search',$data,array('id'=>$id));
			redirect('my_account/saved_search');
		}
	}

	public function delete_save_search($id)
	{
		$this->listing_model->delete('save_search',array('id'=>$id));
		redirect('my_account/saved_search');
	}

	public function watchlist_notification()
	{
		$data = $this->input->post();
		$watchlist = $this->listing_model->get_row_single('watchlist',array('user_id'=>$data['user_id'],'inventory_id'=>$data['inventory_id']));
		if ($watchlist) {
			$this->listing_model->update('watchlist',$data,array('id'=>$watchlist['id']));
		}
		else{
			$this->listing_model->insert('watchlist',$data);
		}
	}

}
