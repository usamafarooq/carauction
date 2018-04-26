<?php
		    class Locations extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Locations_model');
	        $this->module = 'locations';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Locations';
			if ( $this->permission['view_all'] == '1'){$this->data['locations'] = $this->Locations_model->all_rows('locations');}
			elseif ($this->permission['view'] == '1') {$this->data['locations'] = $this->Locations_modelget_rows('locations',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/locations/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Locations';$this->load->template('admin/locations/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Locations_model->insert('locations',$data);
			if ($id) {
				redirect('admin/locations');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Locations';
			$this->data['locations'] = $this->Locations_model->get_row_single('locations',array('id'=>$id));$this->load->template('admin/locations/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Locations_model->update('locations',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/locations');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Locations_model->delete('locations',array('id'=>$id));
			redirect('admin/locations');
		}}