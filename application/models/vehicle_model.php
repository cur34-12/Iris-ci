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

		public function create_vehicle(){
			$data = array(
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'model' => $this->input->post('model'),
				'capacity' => $this->input->post('capacity'),
				'lr' => $this->input->post('lr')
			);

			return $this->db->insert('vehicles', $data);
		}
	}