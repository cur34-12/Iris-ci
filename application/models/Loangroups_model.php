<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Loangroups_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_loangroups($loangroup_id = FALSE){
			if($loangroup_id === FALSE){
				$this->db->order_by('loangroup_created_date', 'ASC');
				$this->db->join('members', 'members.member_id = loangroups.loangroup_member');
				$this->db->join('users', 'users.id = loangroups.loangroup_last_modified_user');
				$this->db->join('users', 'users.id = loangroups.loangroup_created_by');

				$query = $this->db->get('loangroups');
				return $query->result_array();
			}

			$query = $this->db->query("
				SELECT
					`loangroups`.`loangroup_id`,
					`loangroups`.`loangroup_name`,
					`loangroups`.`loangroup_member` ,
					`loangroups`.`loangroup_last_modified`,
					`loangroups`.`loangroup_last_modified_user`,
					`loangroups`.`loangroup_created_date` ,
					`loangroups`.`loangroup_created_by`,
					members.member_name,
					members.member_id,
					cusers.username as CreatedUserName,
					musers.username as ModifiedUserName
				FROM `loangroups` 
				INNER JOIN `members` ON `members`.`member_id` = `loangroups`.`loangroup_member` 
				INNER JOIN `users` as `musers` ON `musers`.`id` = `loangroups`.`loangroup_last_modified_user` 
				INNER JOIN `users` as `cusers` ON `cusers`.`id` = `loangroups`.`loangroup_created_by` 
				WHERE `loangroup_id` = '?'
				",
				array($loangroup_id)
			)

			return $query->row_array();
		}

		public function create_loangroup(){
			$data = array(
				'loangroup_name' => $this->input->post('loangroup_name'),
				'loangroup_member' => $this->input->post('loangroup_member'),
				'loangroup_last_modified_user' => $this->input->post('loangroup_last_modified_user'),
				'loangroup_created_date' => $this->input->post('loangroup_created_date'),
				'loangroup_created_by' => $this->input->post('loangroup_created_by')
			);

			return $this->db->insert('loangroups', $data);
		}

		public function delete_loangrop($loangroup_id){
			$this->db->where('loangroup_id', $loangroup_id);
			$this->db->delete('loangroups');
			return true;
		}

		public function update_loangroup(){
			$data = array(
				'loangroup_name' => $this->input->post('loangroup_name'),
				'loangroup_member' => $this->input->post('loangroup_member'),
				'loangroup_last_modified_user' => $this->input->post('loangroup_last_modified_user')
			);

			$this->db->where('loangroup_id', $this->input->post('loangroup_id'));
			return $this->db->update('loangroups', $data);
		}
	}