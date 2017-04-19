<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Issues_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_issues($issueID = FALSE){
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
				'title' => $this->input->post('title'),
				'equipmentID' => $this->input->post('equipmentID'),
				'assemblyID' => $this->input->post('assemblyID'),
				'description' => $this->input->post('description'),
				'reporterID' => $this->input->post('reporterID'),
				'reported_date' => $this->input->post('reported_date'),
				'status' => $this->input->post('status') //This is a hidden field with the value of "new"
			);

			return $this->db->insert('issues', $data);
		}

		public function delete_issue($issueID){
			$this->db->where('issueID', $issudID);
			$this->db->delete('issues');
			return true;
		}

		public function update_issue(){
			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'equipmentID' => $this->input->post('equipmentID'),
				'assemblyID' => $this->input->post('assemblyID'),
				'assigned_user' => $this->input->post('assigned_user'),
				'resolution_date' => $this->input->post('resolution_date'),
				'status' => $this->input->post('status')
			);

			$this->db->where('issueID', $this->input->post('issueID'));
			return $this->db->update('issues', $data);
		}
	}
