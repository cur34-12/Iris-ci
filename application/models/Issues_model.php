<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Issues_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_issues($iss_id = FALSE){
			if($issueID === FALSE){
				$this->db->order_by('iss_reported_date', 'ASC');
				$this->db->join('equipment', 'equipment.eq_id = issues.iss_eq_id');
				$query = $this->db->get('issues');
				return $query->result_array();
			}

			$this->db->join('equipment', 'equipment.eq_id = issues.iss_eq_id');
			$query = $this->db->get_where('issues', array('iss_id' => $issueID));
			return $query->row_array();
		}

		public function create_issue(){
			$data = array(
				'title' => $this->input->post('iss_title'),
				'iss_eq_id' => $this->input->post('isseq_id'),
				'description' => $this->input->post('iss_description'),
				'reporterID' => $this->input->post('iss_reporter_id'),
				'reported_date' => $this->input->post('iss_reported_date'),
				'assigned_user' => $this->input->pos('iss_assigned_user'),
				'createdByID' => $this->input->post('iss_creator_id'),
				'status' => $this->input->post('iss_status') //This is a hidden field with the value of "new"
			);

			return $this->db->insert('issues', $data);
		}

		public function delete_issue($iss_id){
			$this->db->where('iss_id', $iss_id);
			$this->db->delete('issues');
			return true;
		}

		public function update_issue(){
			$data = array(
				'title' => $this->input->post('iss_title'),
				'description' => $this->input->post('iss_description'),
				'equipmentID' => $this->input->post('iss_eq_id'),
				'assigned_user' => $this->input->post('iss_assigned_user'),
				'resolution_date' => $this->input->post('iss_resolution_date'),
				'status' => $this->input->post('iss_status')
			);

			$this->db->where('iss_id', $this->input->post('iss_id'));
			return $this->db->update('issues', $data);
		}
	}
