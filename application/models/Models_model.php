<?php
		    class Models_model extends MY_Model{

		    	public function get_models($id = null)
					{
						$this->db->select('models.*,makes.Name as make')
								 ->from('models')->join('makes', 'makes.id = models.Make'); if ($id != null) {
								$this->db->where('models.user_id', $id);
							}return $this->db->get()->result_array();
					}

					public function get_by_make_id( $make_id )
					{
						$this->db->select()
						->from('models')
						->where('Make', $make_id);
						return $this->db->get()->result();
					}

				}