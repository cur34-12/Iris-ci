<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Equipment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_equipment($eq_id = FALSE){
			if($eq_id === FALSE){
				$this->db->order_by('eq_category', 'ASC');
				$this->db->join('assemblies', 'assemblies.ass_id = equipment.eq_assembly_id');
				$query = $this->db->get('equipment');
				return $query->result_array();
			}
			$this->db->join('assemblies', 'assemblies.ass_id = equipment.eq_assembly_id');
			$query = $this->db->get_where('equipment', array('eq_id' => $eq_id));
			return $query->row_array();
		}

		public function create_equipment(){
			$data = array(
				'eq_id' => $this->input->post('eq_id'),
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
				'eq_assembly' => $this->input->post('eq_assembly')
			);

			//$barcode_var = $this->input->post('equipmentID');
			//$this->create_code39($barcode_var);
			//$this->create_qr($barcode_var);

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
				'eq_end_ife' => $this->input->post('eq_end_life'),
				'eq_purchase_type' => $this->input->post('eq_purchase_type'),
				'eq_asset_number' => $this->input->post('eq_asset_number'),
				'eq_serial' => $this->input->post('eq_serial'),
				'eq_assembly' => $this->input->post('eq_assembly')
			);

			$this->db->where('eq_id', $this->input->post('eq_id'));
			return $this->db->update('equipment', $data);
		}

		public function search_equipment($q){
	    	$this->db->select('eq_name');
	    	$this->db->like('eq_name', $q);
	    	$query = $this->db->get('equipment');
	    		if($query->num_rows() > 0){
	      			foreach ($query->result_array() as $row){
	        			$row_set[] = htmlentities(stripslashes($row['eq_name'])); //build an array
	      			}
	      			echo json_encode($row_set); //format the array into json data
	    		}
  		}
	}
