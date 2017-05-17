<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Suppliers_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_suppliers($supplier_id = FALSE){
			if($supplier_id === FALSE){
				$this->db->order_by('supplier_name', 'ASC');
				$query = $this->db->get('suppliers');
				return $query->result_array();
			}

			$query = $this->db->get_where('suppliers', array('supplier_id' => $supplier_id));
			return $query->row_array();
		}

		public function create_supplier(){
			$data = array(
				'supplier_name' => $this->input->post('supplier_name'),
				'supplier_street' => $this->input->post('supplier_street'),
				'supplier_suburb' => $this->input->post('supplier_suburb'),
				'supplier_number' => $this->input->post('supplier_phone'),
				'supplier_services' => $this->input->post('supplier_services'),
				'supplier_account' => $this->input->post('supplier_account'),
				'supplier_account_num' => $this->input->post('supplier_account_num'),
				'supplier_active' => $this->input->post('supplier_active'),
				'supplier_created_date' => $this->input->post('supplier_created_date'),
				'supplier_created_by' => $this->input->post('supplier_created_by'),
				'supplier_last_updated' => $this->input->post('supplier_created_by'),
				'supplier_last_updated_by' => $this->input->post('supplier_created_by')
			);

			return $this->db->insert('suppliers', $data);
		}

		public function delete_supplier($supplier_id){
			$this->db->where('supplier_id', $supplier_id);
			$this->db->delete('suppliers');
			return true;
		}

		public function update_supplier(){
			$data = array(
				'supplier_id' => $this->input->post('supplier_id'),
				'supplier_name' => $this->input->post('supplier_name'),
				'supplier_street' => $this->input->post('supplier_street'),
				'supplier_suburb' => $this->input->post('supplier_suburb'),
				'supplier_number' => $this->input->post('supplier_phone'),
				'supplier_services' => $this->input->post('supplier_services'),
				'supplier_account' => $this->input->post('supplier_account'),
				'supplier_account_num' => $this->input->post('supplier_account_num'),
				'supplier_active' => $this->input->post('supplier_active'),
				'supplier_last_updated' => $this->input->post('supplier_created_by'),
				'supplier_last_updated_by' => $this->input->post('supplier_created_by')
			);

			$this->db->where('supplier_id', $this->input->post('supplier_id'));
			return $this->db->update('suppliers', $data);
		}
	}
