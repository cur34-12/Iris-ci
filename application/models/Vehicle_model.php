<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Vehicle_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_vehicles($name = FALSE){
			if($name === FALSE){
				$this->db->order_by('name', 'ASC');
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
				'category' => $this->input->post('category'),
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'lr' => $this->input->post('lr')
			);

			return $this->db->insert('vehicles', $data);
		}

		public function delete_vehicle($name){
			$this->db->where('name', $name);
			$this->db->delete('vehicles');
			return true;
		}

		public function update_vehicle(){
			$data = array(
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'category' => $this->input->post('category'),				
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'lr' => $this->input->post('lr')
			);

			$this->db->where('vehID', $this->input->post('vehID'));
			return $this->db->update('vehicles', $data);
		}

		public function select_vehicle($name = FALSE){
			if($name === FALSE){
				$this->db->order_by('name', 'ASC');
				$query = $this->db->get('vehicles');
				return $query->result_array();
			}
	}
