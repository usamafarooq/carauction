<?php
class Inventory extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->module     = 'inventory';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }
    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('admin/home');
        }
        $this->data['title'] = 'Inventory';
        if ($this->permission['view_all'] == '1') {
            $this->data['inventory'] = $this->Inventory_model->get_inventory();
        } elseif ($this->permission['view'] == '1') {
            $this->data['inventory'] = $this->Inventory_model->get_inventory($this->id);
        }
        //print_r($this->db->last_query());
        //echo '<pre>';print_r($this->data['inventory']);die;
        $this->data['permission'] = $this->permission;
        $this->load->template('admin/inventory/index', $this->data);
    }
    public function create()
    {
        if ($this->permission['created'] == '0') {
            redirect('admin/home');
        }
        $this->data['title']        = 'Create Inventory';
        $this->data['table_makes']  = $this->Inventory_model->all_rows('makes');
        $this->data['table_auction']  = $this->Inventory_model->get_rows('auctions',array('Date >='=> date('Y-m-d')));
        //$this->data['table_models'] = $this->Inventory_model->all_rows('models');
        $this->data['table_type'] = $this->Inventory_model->all_rows('vehicle_type');
        $this->load->template('admin/inventory/create', $this->data);
    }
    public function insert()
    {
        if ($this->permission['created'] == '0') {
            redirect('admin/home');
        }
        $data                    = $this->input->post();
        $data['user_id']         = $this->session->userdata('user_id');
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size']      = 1000;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;
        $this->load->library('upload', $config);
        $id = $this->Inventory_model->insert('inventory', $data);
        if ($id) {
            $files = $_FILES['Images'];
            foreach ($files['name'] as $key => $image) {
                $_FILES['images']['name']= $files['name'][$key];
                $_FILES['images']['type']= $files['type'][$key];
                $_FILES['images']['tmp_name']= $files['tmp_name'][$key];
                $_FILES['images']['error']= $files['error'][$key];
                $_FILES['images']['size']= $files['size'][$key];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('images')) {
                    $data = array(
                        'inventory_id'=>$id,
                        'images' => '/uploads/' . $this->upload->data('file_name')
                    );
                    $file_id = $this->Inventory_model->insert('inventory_images', $data);
                } else {
                    echo 1;die;
                    return false;
                }
            }
            redirect('admin/inventory');
        }
    }
    public function edit($id)
    {
        if ($this->permission['edit'] == '0') {
            redirect('admin/home');
        }
        $this->data['title']        = 'Edit Inventory';
        $this->data['inventory']    = $this->Inventory_model->get_row_single('inventory', array(
            'id' => $id
        ));
        $this->data['images'] = $this->Inventory_model->get_rows('inventory_images', array('inventory_id' => $id));
        $this->data['table_auction']  = $this->Inventory_model->get_rows('auctions',array('Date >='=> date('Y-m-d')));
        $this->data['table_makes']  = $this->Inventory_model->all_rows('makes');
        $this->data['table_models'] = $this->Inventory_model->all_rows('models');
        $this->data['table_type'] = $this->Inventory_model->all_rows('vehicle_type');
        $this->load->template('admin/inventory/edit', $this->data);
    }
    
    public function update()
    {
        if ($this->permission['edit'] == '0') {
            redirect('admin/home');
        }
        $data = $this->input->post();
        //echo '<pre>';print_r($data);die;
        $id   = $data['id'];
        unset($data['id']);
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size']      = 1000;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;
        $this->load->library('upload', $config);
        $this->Inventory_model->update('inventory', $data, array(
            'id' => $id
        ));
        $files = $_FILES['Images'];
        if ($files['name'][0]) {
            foreach ($files['name'] as $key => $image) {
                $_FILES['images']['name']= $files['name'][$key];
                $_FILES['images']['type']= $files['type'][$key];
                $_FILES['images']['tmp_name']= $files['tmp_name'][$key];
                $_FILES['images']['error']= $files['error'][$key];
                $_FILES['images']['size']= $files['size'][$key];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('images')) {
                    $data = array(
                        'inventory_id'=>$id,
                        'images' => '/uploads/' . $this->upload->data('file_name')
                    );
                    $file_id = $this->Inventory_model->insert('inventory_images', $data);
                } else {
                    echo 1;die;
                    return false;
                }
            }
        }
            redirect('admin/inventory');
    }
    public function delete($id)
    {
        if ($this->permission['deleted'] == '0') {
            redirect('admin/home');
        }
        $this->Inventory_model->delete('inventory', array(
            'id' => $id
        ));
        redirect('admin/inventory');
    }


    public function delete_image()
    {
        $image_id = $this->input->post('image_id');
        $image = $this->Inventory_model->get_row_single('inventory_images', array(
            'id' => $image_id
        ));
        $root_path = str_replace('\application', '', APPPATH);
        if ( file_exists($root_path.$image['images'] )  ) {
            unlink( $root_path.$image['images'] ) ;
        }
        $this->Inventory_model->delete('inventory_images', array(
            'id' => $image_id
        ));
    }
}