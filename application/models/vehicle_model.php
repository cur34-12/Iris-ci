<?php
	class Vehicle_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_vehicles($name = FALSE){
			if($name === FALSE){
				$query = $this->db->get('vehicles');
				return $query->result_array();
			}

			$query = $this->db->get_where('vehicles', array('name' => $name));
			return $query->row_array();
		}
	}