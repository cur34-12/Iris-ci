<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Issues_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_issues($issueID = FALSE){
			if($issueID === FALSE){
				$this->db->order_by('reported_date', 'ASC');
				$this->db->join('equipment', 'equipment.equipmentID = issues.equipmentID');
				$query = $this->db->get('issues');
				return $query->result_array();
			}

			$this->db->join('equipment', 'equipment.equipmentID = issues.equipmentID');
			$query = $this->db->get_where('issues', array('issueID' => $issueID));
			return $query->row_array();
		}

		public function create_issue(){
			$data = array(
				'title' => $this->input->post('title'),
				'equipmentID' => $this->input->post('equipmentID'),
				'description' => $this->input->post('description'),
				'reporterID' => $this->input->post('reporterID'),
				'reported_date' => $this->input->post('reported_date'),
				'assigned_user' => $this->input->pos('assigned_user'),
				'createdByID' => $this->input->post('createdByID'),
				'status' => $this->input->post('status') //This is a hidden field with the value of "new"
			);

			return $this->db->insert('issues', $data);
		}

		public function delete_issue($issueID){
			$this->db->where('issueID', $issueID);
			$this->db->delete('issues');
			return true;
		}

		public function update_issue(){
			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'equipmentID' => $this->input->post('equipmentID'),
				'assigned_user' => $this->input->post('assigned_user'),
				'resolution_date' => $this->input->post('resolution_date'),
				'status' => $this->input->post('status')
			);

			$this->db->where('issueID', $this->input->post('issueID'));
			return $this->db->update('issues', $data);
		}
	}
