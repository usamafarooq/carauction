<?php 

class Home_model extends MY_Model
{
	public function get_popular_listing()
	{
		$this->db->select('images,inventory_id')
				 ->from('inventory_images')
				 ->group_by('inventory_id');
				 //->where('inventory.id = inventory_images.inventory_id');
		$images = $this->db->get_compiled_select();
		$this->db->select('bid,stock_number')
				 ->from('inventory_bids')
				 ->group_by('stock_number');
		$bid = $this->db->get_compiled_select();
		$this->db->distinct();
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date,inventory_bids.bid as amount')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('('.$bid.') inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('('.$images.') inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live !=', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->limit(6)
				 ->order_by('inventory.id', 'DESC');
		return $this->db->get()->result_array();
	}

	public function get_live_listing()
	{
		$this->db->select('images,inventory_id')
				 ->from('inventory_images')
				 ->group_by('inventory_id');
				 //->where('inventory.id = inventory_images.inventory_id');
		$images = $this->db->get_compiled_select();
		$this->db->distinct();
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date,locations.Location,inventory_bids.bid as amount')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('('.$images.') inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->where('auctions.Date <', date('Y-m-d', strtotime('1 day')))
				 ->limit(15)
				 ->order_by('inventory.id', 'DESC');
		return $this->db->get()->result_array();
	}
}