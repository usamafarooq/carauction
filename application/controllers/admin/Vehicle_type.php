<?php
		    class Vehicle_type extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Vehicle_type_model');
	        $this->module = 'vehicle_type';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Vehicle_type';
			if ( $this->permission['view_all'] == '1'){$this->data['vehicle_type'] = $this->Vehicle_type_model->all_rows('vehicle_type');}
			elseif ($this->permission['view'] == '1') {$this->data['vehicle_type'] = $this->Vehicle_type_modelget_rows('vehicle_type',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/vehicle_type/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Vehicle_type';$this->load->template('admin/vehicle_type/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'jpg|jpeg|png|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Image'))
					                {
					                        $data['Image'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Vehicle_type_model->insert('vehicle_type',$data);
			if ($id) {
				redirect('admin/vehicle_type');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Vehicle_type';
			$this->data['vehicle_type'] = $this->Vehicle_type_model->get_row_single('vehicle_type',array('id'=>$id));$this->load->template('admin/vehicle_type/edit',$this->data);
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
					                $config['allowed_types']        = 'jpg|jpeg|png|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Image'))
					                {
					                        $data['Image'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Vehicle_type_model->update('vehicle_type',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/vehicle_type');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Vehicle_type_model->delete('vehicle_type',array('id'=>$id));
			redirect('admin/vehicle_type');
		}}