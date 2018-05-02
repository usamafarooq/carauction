<?php
class Locations_model extends MY_Model{

	public function get_state()
	{
		$this->db->select('*')
				 ->from('locations')
				 ->group_by('State');
		return $this->db->get()->result_array();
	}

	public function get_locations($state,$start,$end)
	{
		$this->db->select('locations.*')
				 ->from('locations')
				 ->join('auctions', 'locations.id = auctions.Location')
				 ->where('locations.State',$state)
				 ->where('auctions.Date >=', $start)
				 ->where('auctions.Date <=', $end);
		return $this->db->get()->result_array();
	}
}