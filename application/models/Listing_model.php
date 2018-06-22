<?php 

class Listing_model extends MY_Model
{
	public function get_inventory($order,$result,$page,$type = null,$id = null)
	{

		$offset = (($page - 1) * $result);
		//echo $offset;die;
		$this->db->select('images,inventory_id')
				 ->from('inventory_images')
				 ->group_by('inventory_id');
				 //->where('inventory.id = inventory_images.inventory_id');
		$images = $this->db->get_compiled_select();
		$this->db->select('bid,stock_number')
				 ->from('inventory_bids')
				 ->group_by('stock_number');
		$bid = $this->db->get_compiled_select();
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date,locations.Location,inventory_bids.bid as amount')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('('.$bid.') inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('('.$images.') inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live !=', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->order_by('inventory.id', 'DESC')
				 ->limit($result, $offset);
		if ($type != null) {
			if ($type == 'type') {
				$this->db->where('vehicle_type.id', $id);
			}
			elseif ($type == 'search') {
				foreach ($id as $key => $value) {
					if ($key == 'title') {
						$this->db->like('inventory.Name', $value);
					}
					else{
						$this->db->where($key, $value);
					}
				}
			}
			elseif ($type == 'location') {
				$this->db->where('locations.id', $id);
			}
			elseif ($type == 'auction') {
				$this->db->where('auctions.id', $id);
			}
		}
		if ($order) {
			$this->db->order_by($order['sort'], $order['type']);
		}
		else{
			$this->db->order_by('inventory.id', 'DESC');
		}
		//echo '<pre>';print_r($this->db);echo '</pre>';die;
		return $this->db->get()->result_array();
	}

	public function get_inventory_count($type = null,$id = null)
	{
		$this->db->select('bid,stock_number')
				 ->from('inventory_bids')
				 ->group_by('stock_number');
		$bid = $this->db->get_compiled_select();
		$this->db->select('inventory.id')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('('.$bid.') inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 //->join('inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live !=', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->order_by('inventory.id', 'DESC');
				 //->limit(6);
		if ($type != null) {
			if ($type == 'type') {
				$this->db->where('vehicle_type.id', $id);
			}
			elseif ($type == 'search') {
				foreach ($id as $key => $value) {
					if ($key == 'title') {
						$this->db->like('inventory.Name', $value);
					}
					else{
						$this->db->where($key, $value);
					}
				}
			}
			elseif ($type == 'location') {
				$this->db->where('locations.id', $id);
			}
			elseif ($type == 'auction') {
				$this->db->where('auctions.id', $id);
			}
		}
		return $this->db->count_all_results();
	}

	public function get_detail($id)
	{
		$this->db->select('images,inventory_id')
				 ->from('inventory_images');
				 //->where('inventory.id = inventory_images.inventory_id');
		$images = $this->db->get_compiled_select();
		$this->db->select('bid,stock_number')
				 ->from('inventory_bids')
				 ->group_by('stock_number');
		$bid = $this->db->get_compiled_select();
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,group_concat(inventory_images.images separator ",") as images,vehicle_type.Name as type,auctions.Date as Sale_Date,locations.Location as Sale_Location,inventory_bids.bid as amount,locations.id as location_id')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('('.$bid.') inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('('.$images.') inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('inventory.id', $id);
		return $this->db->get()->row_array();
	}

	public function get_live_listing($type = null,$id = null)
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
		$this->db->select('inventory.*,makes.Name as make,models.Name as model,inventory_images.images,vehicle_type.Name as type,auctions.Date as Sale_Date,locations.Location,inventory_bids.bid as amount')
				 ->from('inventory')
				 ->join('makes', 'makes.id = inventory.Make', 'left')
				 ->join('('.$bid.') inventory_bids', 'inventory_bids.stock_number = inventory.Stock_ID', 'left')
				 ->join('models', 'models.id = inventory.Model')
				 ->join('vehicle_type', 'vehicle_type.id = inventory.type')
				 ->join('auctions', 'auctions.id = inventory.Auction', 'left')
				 ->join('locations', 'locations.id = auctions.Location')
				 ->join('('.$images.') inventory_images', 'inventory.id = inventory_images.inventory_id', 'left')
				 ->group_by('inventory.id')
				 ->where('auctions.Live', 'Yes')
				 ->where('auctions.Date >=', date('Y-m-d'))
				 ->where('auctions.Date <', date('Y-m-d', strtotime('1 day')))
				 ->order_by('inventory.id', 'DESC');
				 //->limit(15);
		if ($type != null) {
			if ($type == 'type') {
				$this->db->where('vehicle_type.id', $id);
			}
			elseif ($type == 'search') {
				foreach ($id as $key => $value) {
					if ($key == 'title') {
						$this->db->like('inventory.Name', $value);
					}
					else{
						$this->db->where($key, $value);
					}
				}
			}
			elseif ($type == 'location') {
				$this->db->where('locations.id', $id);
			}
			elseif ($type == 'auction') {
				$this->db->where('auctions.id', $id);
			}
		}
		return $this->db->get()->result_array();
	}
}