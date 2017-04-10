<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Equipment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_equipment($equipmentID = FALSE){
			if($equipmentID === FALSE){
				$this->db->order_by('category', 'ASC');
				$query = $this->db->get('equipment');
				return $query->result_array();
			}

			$query = $this->db->get_where('equipment', array('equipmentID' => $equipmentID));
			return $query->row_array();
		}

		public function create_equipment(){
			$data = array(
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'lr' => $this->input->post('lr')
			);

			return $this->db->insert('vehicles', $data);
		}

		public function delete_equipment($name){
			$this->db->where('name', $name);
			$this->db->delete('vehicles');
			return true;
		}

		public function update_equipment(){
			$data = array(
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'lr' => $this->input->post('lr')
			);

			$this->db->where('equipmentID', $this->input->post('equipmentID'));
			return $this->db->update('equipment', $data);
		}
	}