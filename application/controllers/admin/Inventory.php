<?php
		    class Inventory extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Inventory_model');
	        $this->module = 'inventory';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Inventory';
			if ( $this->permission['view_all'] == '1'){$this->data['inventory'] = $this->Inventory_model->get_inventory();}
			elseif ($this->permission['view'] == '1') {$this->data['inventory'] = $this->Inventory_model->get_inventory($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/inventory/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Inventory';$this->data['table_makes'] = $this->Inventory_model->all_rows('makes');$this->data['table_models'] = $this->Inventory_model->all_rows('models');$this->load->template('admin/inventory/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'png|jpg|jpeg|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Images'))
					                {
					                        $data['Images'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Inventory_model->insert('inventory',$data);
			if ($id) {
				redirect('admin/inventory');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Inventory';
			$this->data['inventory'] = $this->Inventory_model->get_row_single('inventory',array('id'=>$id));$this->data['table_makes'] = $this->Inventory_model->all_rows('makes');$this->data['table_models'] = $this->Inventory_model->all_rows('models');$this->load->template('admin/inventory/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'png|jpg|jpeg|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Images'))
					                {
					                        $data['Images'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Inventory_model->update('inventory',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/inventory');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Inventory_model->delete('inventory',array('id'=>$id));
			redirect('admin/inventory');
		}}