<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Vehicle_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_vehicles($veh_id = FALSE){
			if($veh_id === FALSE){
				$this->db->order_by('veh_name', 'ASC');
				$query = $this->db->get('vehicles');
				return $query->result_array();
			}

			$query = $this->db->get_where('vehicles', array('veh_id' => $veh_id));
			return $query->row_array();
		}

		public function create_vehicle(){
			$data = array(
				'veh_name' => $this->input->post('veh_name'),
				'veh_rego' => $this->input->post('veh_rego'),
				'veh_make' => $this->input->post('veh_make'),
				'veh_category' => $this->input->post('veh_category'),
				'veh_model' => $this->input->post('veh_model'),
				'veh_year' => $this->input->post('veh_year'),
				'veh_capacity' => $this->input->post('veh_capacity'),
				'veh_location_id' => $this->input->post('veh_location_id'),
				'veh_list_id' => $this->input->post('veh_list_id'),
				'veh_eq_id' => $this->input->post('veh_name'),
				'veh_license_type' => $this->input->post('veh_license_type')
			);

			return $this->db->insert('vehicles', $data);
		}

		public function delete_vehicle($veh_id){
			$this->db->where('veh_id', $veh_id);
			$this->db->delete('vehicles');
			return true;
		}

		public function update_vehicle(){
			$data = array(
				'veh_name' => $this->input->post('veh_name'),
				'veh_rego' => $this->input->post('veh_rego'),
				'veh_make' => $this->input->post('veh_make'),
				'veh_category' => $this->input->post('veh_category'),
				'veh_model' => $this->input->post('veh_model'),
				'veh_year' => $this->input->post('veh_year'),
				'veh_capacity' => $this->input->post('veh_capacity'),
				'veh_location_id' => $this->input->post('veh_location_id'),
				'veh_list_id' => $this->input->post('veh_list_id'),
				'veh_eq_id' => $this->input->post('veh_name'),
				'veh_license_type' => $this->input->post('veh_license_type')
			);

			$this->db->where('veh_id', $this->input->post('veh_id'));
			return $this->db->update('vehicles', $data);
		}
	}
