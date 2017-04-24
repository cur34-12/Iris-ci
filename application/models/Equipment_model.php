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
				'description' => $this->input->post('description'),
				'consumable' => $this->input->post('consumable'),
				'size' => $this->input->post('size'),
				'brand' => $this->input->post('brand'),
				'supplier' => $this->input->post('supplier'),
				'in_service' => $this->input->post('in_service'),
				'inspection_frequency' => $this->input->post('inspection_frequency'),
				'category' => $this->input->post('category'),
				'date_purchased' => $this->input->post('date_purchased'),
				'endOfLife' => $this->input->post('endOfLife'),
				'purchase_type' => $this->input->post('purchase_type'),
				'asset_number' => $this->input->post('asset_number'),
				'assemblyID' => $this->input->post('assemblyID')
			);
			$barcode_var = $this->input->post('equipmentID');
			$this->create_code39($barcode_var);

			return $this->db->insert('equipment', $data);
		}

		public function delete_equipment($equipmentID){
			$this->db->where('equipmentID', $equipmentID);
			$this->db->delete('equipment');
			return true;
		}

		public function update_equipment(){
			$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'consumable' => $this->input->post('consumable'),
				'size' => $this->input->post('size'),
				'brand' => $this->input->post('brand'),
				'supplier' => $this->input->post('supplier'),
				'in_service' => $this->input->post('in_service'),
				'inspection_frequency' => $this->input->post('inspection_frequency'),
				'category' => $this->input->post('category'),
				'date_purchased' => $this->input->post('date_purchased'),
				'end_of_life_date' => $this->input->post('end_of_life_date'),
				'purchase_type' => $this->input->post('purchase_type'),
				'asset_number' => $this->input->post('asset_number'),
				'assemblyID' => $this->input->post('assemblyID')
			);

			$this->db->where('equipmentID', $this->input->post('equipmentID'));
			return $this->db->update('equipment', $data);
		}
	}
