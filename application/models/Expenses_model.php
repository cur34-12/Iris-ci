<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expenses_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_expenses($expense_id = FALSE){
        if($expense_id === FALSE){
            $this->db->order_by('expense_date', 'ASC');
            $query = $this->db->get('expenses');
            return $query->result_array();
        }

        $query = $this->db->get_where('expenses', array('expense_id' => $expense_id));
        return $query->row_array();
    }

    public function create_supplier(){
        $data = array(
            'expense_name' => $this->input->post('expense_name'),
            'expense_description' => $this->input->post('expense_description'),
            'expense_date' => $this->input->post('expense_date'),
            'expense_created_date' => $this->input->post('expense_created_date'),
            'expense_created_by' => $this->input->post('expense_created_by'),
            'expense_last_updated' => $this->input->post('expense_created_by'),
            'expense_last_updated_by' => $this->input->post('expense_created_by')
        );

        return $this->db->insert('expenses', $data);
    }

    public function delete_expense($expense_id){
        $this->db->where('expense_id', $expense_id);
        $this->db->delete('expenses');
        return true;
    }

    public function update_expense(){
        $data = array(
            'expense_id' => $this->input->post('expense_id'),
            'expense_name' => $this->input->post('expense_name'),
            'expense_description' => $this->input->post('expense_description'),
            'expense_date' => $this->input->post('expense_date'),
            'expense_last_updated' => $this->input->post('expense_created_by'),
            'expense_last_updated_by' => $this->input->post('expense_created_by')
        );

        $this->db->where('expense_id', $this->input->post('expense_id'));
        return $this->db->update('expenses', $data);
    }
}
