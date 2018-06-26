<?php 

class Main_model extends MY_Model
{
	public function get_menu($role)
	{
		return $this->db->query('SELECT m.* FROM modules m JOIN permission p ON p.module_id = m.id WHERE p.user_type_id = '.$role.' AND (p.view = 1 OR p.view_all = 1) GROUP BY m.id ORDER BY m.sort')->result_array();
	}

	public function get_user_permission($module,$role)
	{
		$this->db->select('p.*')
				 ->from('permission p')
				 ->join('modules m','m.id = p.module_id')
				 ->where('m.main_name',$module)
				 ->where('p.user_type_id',$role);
		return $this->db->get()->row_array();
	}

	public function get_package($id)
	{
		$this->db->select('p.*')
				 ->from('packages p')
				 ->join('user_package up', 'up.package_id = p.id')
				 ->where('up.user_id',$id)
				 ->order_by('up.id','desc');
		return $this->db->get()->row_array();
	}

	public function get_user($id)
	{
		$this->db->select('count(id) as watchlist, user_id')
				 ->from('watchlist')
				 ->group_by('user_id');
		$watchlist = $this->db->get_compiled_select();
		$this->db->select('count(id) as save_search, user_id')
				 ->from('save_search')
				 ->group_by('user_id');
				 //->where('inventory.id = inventory_images.inventory_id');
		$save_search = $this->db->get_compiled_select();
		$this->db->select('u.*,group_concat(ud.file separator ",") as document,group_concat(ud.id separator ",") as document_id, w.watchlist, s.save_search')
				 ->from('users u')
				 ->join('user_document ud','ud.user_id = u.id', 'left')
				 ->join('('.$watchlist.') w', 'w.user_id = u.id', 'left')
				 ->join('('.$save_search.') s', 's.user_id = u.id', 'left')
				 ->group_by('u.id')
				 ->where('u.id',$id);
		return $this->db->get()->row_array();		 
	}
}