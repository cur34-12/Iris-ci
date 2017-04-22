<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class User_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function user_list(){
        	$this->db->select('username');
        	$this->db->from('users');
        	$query = $this->db->get();
        	return $query->result_array();
		}
	}
