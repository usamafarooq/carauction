<?php 

class Account_model extends MY_Model
{
	public function get_watchlist($id,$order=null)
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
		
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date,locations.Location,inventory_bids.bid as amount, watchlist.type as watch_type, watchlist.status as watch_status, count(watchlist.id) as watch')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('('.$bid.') inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('watchlist', 'inventory.id = watchlist.inventory_id and watchlist.user_id = '.$id)
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('('.$images.') inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live !=', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->order_by('inventory.id', 'DESC');
		if ($order) {
			$this->db->order_by($order['sort'], $order['type']);
		}
		else{
			$this->db->order_by('inventory.id', 'DESC');
		}
		//echo '<pre>';print_r($this->db);echo '</pre>';die;
		return $this->db->get()->result_array();
	}
}