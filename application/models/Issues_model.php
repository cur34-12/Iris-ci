<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Issues_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_issues($issudID = FALSE){
			if($name === FALSE){
				$this->db->order_by('issueID', 'ASC');
				$query = $this->db->get('issues');
				return $query->result_array();
			}

			$query = $this->db->get_where('issues', array('issueID' => $issudID));
			return $query->row_array();
		}

		public function create_issue(){//change meeeeee
			$data = array(
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'category' => $this->input->post('category'),
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'license_type' => $this->input->post('license_type')
			);

			return $this->db->insert('issues', $data);
		}

		public function delete_issue($issueID){
			$this->db->where('name', $issudID);
			$this->db->delete('issues');
			return true;
		}

		public function update_issue(){
			$data = array(
				'name' => $this->input->post('name'),
				'rego' => $this->input->post('rego'),
				'make' => $this->input->post('make'),
				'category' => $this->input->post('category'),				
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'capacity' => $this->input->post('capacity'),
				'license_type' => $this->input->post('license_type')
			);

			$this->db->where('issueID', $this->input->post('issueID'));
			return $this->db->update('issues', $data);
		}
	}
