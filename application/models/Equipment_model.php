<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Equipment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_equipment($eq_id = FALSE){
			if($eq_id === FALSE){
				$this->db->order_by('eq_category', 'ASC');
				$query = $this->db->get('equipment');
				return $query->result_array();
			}

			$query = $this->db->get_where('equipment', array('eq_id' => $eq_id));
			return $query->row_array();
		}

		public function create_equipment(){
			$data = array(
				'eq_id' => $this->input->post('eq_id'),
				'name' => $this->input->post('eq_name'),
				'description' => $this->input->post('eq_description'),
				'consumable' => $this->input->post('eq_consumable'),
				'size' => $this->input->post('eq_size'),
				'brand' => $this->input->post('eq_brand'),
				'supplier' => $this->input->post('eq_supplier'),
				'in_service' => $this->input->post('eq_in_service'),
				'inspection_frequency' => $this->input->post('eq_inspection_frequency'),
				'category' => $this->input->post('eq_category'),
				'date_purchased' => $this->input->post('eq_date_purchased'),
				'endOfLife' => $this->input->post('eq_end_life'),
				'purchase_type' => $this->input->post('eq_purchase_type'),
				'asset_number' => $this->input->post('eq_asset_number'),
				'serial' => $this->input->post('eq_serial'),
				'assemblyID' => $this->input->post('eq_assembly')
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
				'name' => $this->input->post('eq_name'),
				'description' => $this->input->post('eq_description'),
				'consumable' => $this->input->post('eq_consumable'),
				'size' => $this->input->post('eq_size'),
				'brand' => $this->input->post('eq_brand'),
				'supplier' => $this->input->post('eq_supplier'),
				'in_service' => $this->input->post('eq_in_service'),
				'inspection_frequency' => $this->input->post('eq_inspection_frequency'),
				'category' => $this->input->post('eq_category'),
				'date_purchased' => $this->input->post('eq_date_purchased'),
				'endOfLife' => $this->input->post('eq_end_life'),
				'purchase_type' => $this->input->post('eq_purchase_type'),
				'asset_number' => $this->input->post('eq_asset_number'),
				'serial' => $this->input->post('eq_serial'),
				'assemblyID' => $this->input->post('eq_assembly')
			);

			$this->db->where('eq_id', $this->input->post('eq_id'));
			return $this->db->update('equipment', $data);
		}
	}
