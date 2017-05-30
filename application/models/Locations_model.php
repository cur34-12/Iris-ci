<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Locations_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_locations($loc_id = FALSE){
			if($loc_id === FALSE){
				$this->db->order_by('loc_name', 'ASC');
				$query = $this->db->get('locations');
				return $query->result_array();
			}

			$query = $this->db->get_where('locations', array('loc_id' => $loc_id));
			return $query->row_array();
		}

		public function create_location(){
			$data = array(
				'loc_name' => $this->input->post('loc_name'),
				'loc_manager' => $this->input->post('loc_manager')
			);

			return $this->db->insert('locations', $data);
		}

		public function delete_location($loc_id){
			$this->db->where('loc_id', $loc_id);
			$this->db->delete('locations');
			return true;
		}

		public function update_location(){
			$data = array(
                'loc_name' => $this->input->post('loc_name'),
                'loc_manager' => $this->input->post('loc_manager')
			);

			$this->db->where('loc_id', $this->input->post('loc_id'));
			return $this->db->update('locations', $data);
		}
	}
