<?php 

class User_model extends MY_Model
{
	public function get_users($id = null)
	{
		$this->db->select('u.*,ut.name as role')
				 ->from('users u')
				 ->join('user_type ut', 'ut.id = u.role');
		if ($id != null) {
			$this->db->where('u.id', $id);
		}
		return $this->db->get()->result_array();
	}

	public function get_user_detail($id)
	{
		$this->db->select('u.first_name as First_Name,u.last_name as Last_Name,u.email as Email,u.company as Company,u.address as Address,u.country as Country,u.state as State,u.city as City,u.zip as Zip,u.phone as Phone,p.Name as Package,ut.name as Role,group_concat(ud.file separator ",") as Document')
				 ->from('users u')
				 ->join('user_type ut', 'ut.id = u.role')
				 ->join('user_document ud','ud.user_id = u.id', 'left')
				 ->join('user_package up','up.user_id = u.id', 'left')
				 ->join('packages p','p.id = up.package_id', 'left')
				 ->where('u.id', $id);
		return $this->db->get()->row_array();
	}
}