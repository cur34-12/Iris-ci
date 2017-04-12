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
				/*CHANGE ME OR THIS WILL NEVER WORK*/
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'lr' => $this->input->post('lr')
				/*CHANGE ME OR THIS WILL NEVER WORK, i wonder if the barcode system could potentially go here and automatically create a temp barcode and show it, but not save it in the /barcodes/equipment/EAN7-$barcodeID.jpg spot untill the user clicks submit. Jquery probably for this im guessing.*/
			);

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
