<?php 

class Home_model extends MY_Model
{
	public function get_popular_listing()
	{
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 //->join('locations', 'locations.id = auctions.Location')
				 ->join('inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live !=', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->limit(6)
				 ->order_by('inventory.id', 'DESC');
		return $this->db->get()->result_array();
	}

	public function get_live_listing()
	{
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date,locations.Location')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->where('auctions.Date <', date('Y-m-d', strtotime('1 day')))
				 ->limit(15)
				 ->order_by('inventory.id', 'DESC');
		return $this->db->get()->result_array();
	}
}