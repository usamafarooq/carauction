<?php 

class Home_model extends MY_Model
{
	public function get_popular_listing()
	{
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->limit(6);
		return $this->db->get()->result_array();
	}
}