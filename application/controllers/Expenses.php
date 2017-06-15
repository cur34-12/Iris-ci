<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Expenses

class Expenses extends MY_Controller {
    public function index(){

        $data['title'] = 'Expenses';

        $data['expenses'] = $this->Expenses_model->get_expenses();

        $this->load->view('templates/header/header-required', $data);
        $this->load->view('templates/header/header-sidebar');
        $this->load->view('templates/header/header-container');
        $this->load->view('expenses/index', $data);
        $this->load->view('templates/footer/footer-required');
    }

    public function view($expense_id = null){

        $data['expense'] = $this->Expenses_model->get_expenses($expense_id);

        if(empty($data['expense'])){
            show_404();
        }

        $data['title'] = $data['expense']['expense_id'];

        $this->load->view('templates/header/header-required', $data);
        $this->load->view('templates/header/header-sidebar');
        $this->load->view('templates/header/header-container');
        $this->load->view('expenses/view', $data);
        $this->load->view('templates/footer/footer-required');
    }

    public function create(){

        $data['title'] = 'Create Expense';

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header/header-required', $data);
            $this->load->view('templates/header/header-sidebar');
            $this->load->view('templates/header/header-container');
            $this->load->view('expenses/create', $data);
            $this->load->view('templates/footer/footer-required');
        } else {
            $this->Expenses_model->create_expense();
            redirect('expenses');
        }
    }

    public function delete($expense_id){

        $this->Expenses_model->delete_vehicle($expense_id);
        redirect('expenses');
    }

    public function edit($expense_id){

        $data['expense'] = $this->Expenses_model->get_expenses($expense_id);

        if(empty($data['expense'])){
            show_404();
        }

        $data['title'] = 'Edit Expense';

        $this->load->view('templates/header/header-required', $data);
        $this->load->view('templates/header/header-sidebar');
        $this->load->view('templates/header/header-container');
        $this->load->view('expenses/update', $data);
        $this->load->view('templates/footer/footer-required');
    }

    public function update(){

        $this->Expenses_model->update_expense();
        redirect('expenses');
    }

}
?>
