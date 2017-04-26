<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function equipment()
	{
		$json = [];

		$this->load->database();

		if(!empty($this->input->get("q"))){
			$this->db->like('eq_name', $this->input->get("q"));
			$query = $this->db->select('eq_id,eq_name as text') ->limit(10) ->get("equipment");
			$json = $query->result();
		}

		echo json_encode($json);
	}
}