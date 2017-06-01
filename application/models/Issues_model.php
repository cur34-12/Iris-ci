<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Issues_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_issues($iss_id = FALSE){
			if($iss_id === FALSE){
				$this->db->order_by('iss_reported_date', 'ASC');
				$this->db->join('equipment', 'equipment.eq_id = issues.iss_eq_id', 'left');
				$query = $this->db->get('issues');
				return $query->result_array();
			}

			$this->db->join('equipment', 'equipment.eq_id = issues.iss_eq_id', 'left');
			$query = $this->db->get_where('issues', array('iss_id' => $iss_id));
			return $query->row_array();
		}

		public function create_issue(){
			$data = array(
				'iss_title' => $this->input->post('iss_title'),
				'iss_eq_id' => $this->input->post('iss_eq_id'),
				'iss_description' => $this->input->post('iss_description'),
				'iss_reporter_id' => $this->input->post('iss_reporter_id'),
				'iss_reported_date' => $this->input->post('iss_reported_date'),
				'iss_assigned_user' => $this->input->post('iss_assigned_user'),
				'iss_creator_id' => $this->input->post('iss_creator_id'),
				'iss_type' => $this->input->post('iss_type'),
				'iss_status' => $this->input->post('iss_status') //This is a hidden field with the value of "new"
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
				'iss_title' => $this->input->post('iss_title'),
				'iss_description' => $this->input->post('iss_description'),
				'iss_eq_id' => $this->input->post('iss_eq_id'),
				'iss_assigned_user' => $this->input->post('iss_assigned_user'),
				'iss_resolution_date' => $this->input->post('iss_resolution_date'),
				'iss_type' => $this->input->post('iss_type'),
				'iss_status' => $this->input->post('iss_status')
			);

			$this->db->where('iss_id', $this->input->post('iss_id'));
			return $this->db->update('issues', $data);
		}

		public function get_comments($iss_id){
            if($iss_id === FALSE){
                return null;
            }
            $query = $this->db->get_where('issues_comments', array('isscom_related_iss' => $iss_id));
            return $query->result_array();
        }
	}
