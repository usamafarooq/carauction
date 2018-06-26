<?php
class Tickets_model extends MY_Model{
	public function get_thraed($id)
	{
		$this->db->select('message, u.first_name, u.last_name, t.created_at')
				 ->from('ticket_thread t')
				 ->join('users u', 'u.id = t.user_id')
				 ->where('t.ticket_id', $id);
		return $this->db->get()->result_array();
	}
}