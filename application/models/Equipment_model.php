<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Equipment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_equipment($eq_id = FALSE){
			if($eq_id === FALSE){
				$this->db->order_by('eq_category', 'ASC');
				$this->db->join('assemblies', 'assemblies.ass_id = equipment.eq_assembly_id', 'left');
				$query = $this->db->get('equipment');
				return $query->result_array();
			}
			$this->db->join('assemblies', 'assemblies.ass_id = equipment.eq_assembly_id', 'left');
			$query = $this->db->get_where('equipment', array('eq_id' => $eq_id));
			return $query->row_array();
		}

		public function get_categories($eqcat_id = FALSE){
			if($eqcat_id === FALSE){
				$query = $this->db->get('equipment_categories');
				return $query->result_array();
			}
			$query = $this->db->get_where('equipment_categories', array('eqcat_id' => $eqcat_id));
			return $query->row_array();
		}
		
		public function get_equipment_issues($eq_id = FALSE){
			if($eq_id === FALSE){
				return null;
			}
			$query = $this->db->get_where('issues', array('iss_eq_id' => $eq_id));
			return $query->row_array();
		}		

		public function get_assemblies($ass_id = FALSE){
			if($ass_id === FALSE){
				$query = $this->db->get('assemblies');
				return $query->result_array();
			}
			$query = $this->db->get_where('assemblies', array('ass_id' => $ass_id));
			return $query->row_array();
		}

		public function create_assembly(){
			$data = array(
				'ass_name' => $this->input->post('ass_name'),
				'ass_last_checked' => $this->input->post('ass_last_checked'),
				'ass_inspection_frequency' => $this->input->post('ass_inspection_frequency'),
				'ass_description' => $this->input->post('ass_description'),
			);
			return $this->db->insert('assemblies', $data);
		}


		public function create_equipment(){
			$data = array(
				'eq_name' => $this->input->post('eq_name'),
				'eq_description' => $this->input->post('eq_description'),
				'eq_consumable' => $this->input->post('eq_consumable'),
				'eq_size' => $this->input->post('eq_size'),
				'eq_brand' => $this->input->post('eq_brand'),
				'eq_supplier' => $this->input->post('eq_supplier'),
				'eq_in_service' => $this->input->post('eq_in_service'),
				'eq_inspection_frequency' => $this->input->post('eq_inspection_frequency'),
				'eq_category' => $this->input->post('eq_category'),
				'eq_date_purchased' => $this->input->post('eq_date_purchased'),
				'eq_end_life' => $this->input->post('eq_end_life'),
				'eq_purchase_type' => $this->input->post('eq_purchase_type'),
				'eq_asset_number' => $this->input->post('eq_asset_number'),
				'eq_serial' => $this->input->post('eq_serial'),
				'eq_assembly_id' => $this->input->post('eq_assembly_id')
			);
			return $this->db->insert('equipment', $data);
		}

		public function delete_equipment($eq_id){
			$this->db->where('eq_id', $eq_id);
			$this->db->delete('equipment');
			return true;
		}

		public function update_equipment(){
			$data = array(
				'eq_name' => $this->input->post('eq_name'),
				'eq_description' => $this->input->post('eq_description'),
				'eq_consumable' => $this->input->post('eq_consumable'),
				'eq_size' => $this->input->post('eq_size'),
				'eq_brand' => $this->input->post('eq_brand'),
				'eq_supplier' => $this->input->post('eq_supplier'),
				'eq_in_service' => $this->input->post('eq_in_service'),
				'eq_inspection_frequency' => $this->input->post('eq_inspection_frequency'),
				'eq_category' => $this->input->post('eq_category'),
				'eq_date_purchased' => $this->input->post('eq_date_purchased'),
				'eq_end_life' => $this->input->post('eq_end_life'),
				'eq_purchase_type' => $this->input->post('eq_purchase_type'),
				'eq_asset_number' => $this->input->post('eq_asset_number'),
				'eq_serial' => $this->input->post('eq_serial'),
				'eq_assembly_id' => $this->input->post('eq_assembly_id')
			);

			$this->db->where('eq_id', $this->input->post('eq_id'));
			return $this->db->update('equipment', $data);
		}
	}
