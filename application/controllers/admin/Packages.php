<?php
		    class Packages extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Packages_model');
	        $this->module = 'packages';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Packages';
			if ( $this->permission['view_all'] == '1'){$this->data['packages'] = $this->Packages_model->all_rows('packages');}
			elseif ($this->permission['view'] == '1') {$this->data['packages'] = $this->Packages_modelget_rows('packages',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/packages/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Packages';$this->load->template('admin/packages/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Packages_model->insert('packages',$data);
			if ($id) {
				redirect('admin/packages');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Packages';
			$this->data['packages'] = $this->Packages_model->get_row_single('packages',array('id'=>$id));$this->load->template('admin/packages/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Packages_model->update('packages',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/packages');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Packages_model->delete('packages',array('id'=>$id));
			redirect('admin/packages');
		}}