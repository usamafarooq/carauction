<?php
class Auctions_model extends MY_Model
{
    
    public function get_auctions($id = null)
    {
        $this->db->select('auctions.*,locations.Address')
        		 ->from('auctions')
        		 ->join('locations', 'locations.id = auctions.Location');
        if ($id != null) {
            $this->db->where('auctions.user_id', $id);
        }
        return $this->db->get()->result_array();
    }

    public function get_calender()
    {
    	$this->db->select('auctions.*,locations.Location')
    			 ->from('auctions')
    			 ->join('locations', 'locations.id = auctions.Location');
    	return $this->db->get()->result_array();
    }
}