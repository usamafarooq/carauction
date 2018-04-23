<?php
		    class Subscriptions extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Subscriptions_model');
	        $this->module = 'subscriptions';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Subscriptions';
			if ( $this->permission['view_all'] == '1'){$this->data['subscriptions'] = $this->Subscriptions_model->all_rows('subscriptions');}
			elseif ($this->permission['view'] == '1') {$this->data['subscriptions'] = $this->Subscriptions_modelget_rows('subscriptions',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/subscriptions/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Subscriptions';$this->load->template('admin/subscriptions/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Subscriptions_model->insert('subscriptions',$data);
			if ($id) {
				redirect('admin/subscriptions');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Subscriptions';
			$this->data['subscriptions'] = $this->Subscriptions_model->get_row_single('subscriptions',array('id'=>$id));$this->load->template('admin/subscriptions/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Subscriptions_model->update('subscriptions',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/subscriptions');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Subscriptions_model->delete('subscriptions',array('id'=>$id));
			redirect('admin/subscriptions');
		}}