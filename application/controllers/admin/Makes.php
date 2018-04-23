<?php
		    class Makes extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Makes_model');
	        $this->module = 'makes';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Makes';
			if ( $this->permission['view_all'] == '1'){$this->data['makes'] = $this->Makes_model->all_rows('makes');}
			elseif ($this->permission['view'] == '1') {$this->data['makes'] = $this->Makes_modelget_rows('makes',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/makes/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Makes';$this->load->template('admin/makes/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Makes_model->insert('makes',$data);
			if ($id) {
				redirect('admin/makes');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Makes';
			$this->data['makes'] = $this->Makes_model->get_row_single('makes',array('id'=>$id));$this->load->template('admin/makes/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Makes_model->update('makes',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/makes');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Makes_model->delete('makes',array('id'=>$id));
			redirect('admin/makes');
		}}