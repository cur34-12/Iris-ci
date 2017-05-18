<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Unitmembers_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_members($member_id = FALSE){
			if($member_id === FALSE){
				$this->db->order_by('member_id', 'ASC');
				$query = $this->db->get('members');
				return $query->result_array();
			}

			$query = $this->db->get_where('members', array('member_id' => $member_id));
			return $query->row_array();
		}

		public function create_member(){
			$data = array(
				'member_id' => $this->input->post('member_id'),
				'member_name' => $this->input->post('member_name')
			);

			return $this->db->insert('members', $data);
		}

		public function delete_member($member_id){
			$this->db->where('member_id', $member_id);
			$this->db->delete('members');
			return true;
		}

		public function update_member(){
			$data = array(
				'member_id' => $this->input->post('member_id'),
				'member_name' => $this->input->post('member_name'),
			);

			$this->db->where('member_id', $this->input->post('member_id'));
			return $this->db->update('members', $data);
		}
	}
