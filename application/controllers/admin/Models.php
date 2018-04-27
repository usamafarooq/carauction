<?php
		    class Models extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Models_model');
	        $this->module = 'models';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Models';
			if ( $this->permission['view_all'] == '1'){$this->data['models'] = $this->Models_model->get_models();}
			elseif ($this->permission['view'] == '1') {$this->data['models'] = $this->Models_model->get_models($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/models/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Models';$this->data['table_makes'] = $this->Models_model->all_rows('makes');$this->load->template('admin/models/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Models_model->insert('models',$data);
			if ($id) {
				redirect('admin/models');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Models';
			$this->data['models'] = $this->Models_model->get_row_single('models',array('id'=>$id));$this->data['table_makes'] = $this->Models_model->all_rows('makes');$this->load->template('admin/models/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Models_model->update('models',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/models');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Models_model->delete('models',array('id'=>$id));
			redirect('admin/models');
		}

		public function get_by_make_id()
		{
			$id = $this->input->post('make_id');
			$data = $this->Models_model->get_by_make_id( $id );
			echo json_encode(['status' => 'success', 'data' => $data]);

		}
	}