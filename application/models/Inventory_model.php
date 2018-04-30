<?php
class Inventory_model extends MY_Model
{
    
    public function get_inventory($id = null)
    {
        $this->db->select('inventory.*,makes.Name as Make,models.Name as Model')
        		 ->from('inventory')
        		 ->join('makes', 'makes.id = inventory.Make', 'left')
        		 ->join('models', 'models.id = inventory.Model', 'left');
        if ($id != null) {
            $this->db->where('inventory.user_id', $id);
        }
        return $this->db->get()->result_array();
    }
}