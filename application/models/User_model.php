<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class User_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_users(){
			$this->db->order_by('username');
        	$query = $this->db->get('users');
        	return $query->result_array();
		}
	}
