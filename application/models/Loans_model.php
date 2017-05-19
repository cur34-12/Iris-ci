<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Loans_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_loans($loan_id = FALSE){
			if($loan_id === FALSE){
				$this->db->order_by('loan_out_date', 'ASC');
				$this->db->join('loan_groups', 'loan_groups.loan_group_id = loans.loan_group');
				$this->db->join('members', 'members.member_id = loans.loan_member');
				$this->db->join('equipment', 'equipment.eq_id = loans.loan_equipment');
				$query = $this->db->get('loans');
				return $query->result_array();
			}
			$this->db->join('loangroups', 'loangroups.loangroup_id = loans.loan_group');
			$this->db->join('members', 'members.member_id = loans.loan_member');
			$this->db->join('equipment', 'equipment.eq_id = loans.loan_equipment');
			$query = $this->db->get_where('loans', array('loan_id' => $loan_id));
			return $query->row_array();
		}

		public function create_loan(){
			$data = array(
				'loan_id' => $this->input->post('loan_id'),
				'loan_member' => $this->input->post('loan_member'),
				'loan_equipment' => $this->input->post('loan_equipment'),
				'loan_out_date' => $this->input->post('loan_out_date'),
				'loan_in_date' => $this->input->post('loan_in_date'),
				'loan_user' => $this->input->post('loan_user'),
				'loan_last_modified_user' => $this->input->post('loan_last_modified_user'),
				'loan_created_date' => $this->input->post('loan_created_date'),
				'loan_group' => $this->input->post('loan_group'),
				'loan_comment' => $this->input->post('loan_comment')
			);

			return $this->db->insert('loans', $data);
		}

		public function delete_loan($loan_id){
			$this->db->where('loan_id', $loan_id);
			$this->db->delete('loans');
			return true;
		}

		public function update_loan(){
			$data = array(
				'loan_id' => $this->input->post('loan_id'),
				'loan_member' => $this->input->post('loan_member'),
				'loan_equipment' => $this->input->post('loan_equipment'),
				'loan_out_date' => $this->input->post('loan_out_date'),
				'loan_in_date' => $this->input->post('loan_in_date'),
				'loan_user' => $this->input->post('loan_user'),
				'loan_last_modified_user' => $this->input->post('loan_last_modified_user'),
				'loan_group' => $this->input->post('loan_group'),
				'loan_comment' => $this->input->post('loan_comment')
			);

			$this->db->where('loan_id', $this->input->post('loan_id'));
			return $this->db->update('loans', $data);
		}
	}