<?php
		    class Inventory_model extends MY_Model{

		    	public function get_inventory($id = null)
					{
						$this->db->select('inventory.*,makes.Name,models.Name')
								 ->from('inventory')->join('makes', 'makes.id = inventory.Make')->join('models', 'models.id = inventory.Model'); if ($id != null) {
								$this->db->where('inventory.user_id', $id);
							}return $this->db->get()->result_array();
					}}