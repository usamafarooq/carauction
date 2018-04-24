<?php 

class Listing_model extends MY_Model
{
	public function get_inventory($type,$id)
	{
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id');
		return $this->db->get()->result_array();
	}

	public function get_detail($id)
	{
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,group_concat(inventory_images.images separator ",") as images,vehicle_type.Name as type')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('inventory.id', $id);
		return $this->db->get()->row_array();
	}
}