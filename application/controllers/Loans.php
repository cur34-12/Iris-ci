<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        //use Zend\Barcode\Barcode;

        class Loans extends CI_Controller {
                public function index(){
                       $data['title'] = 'Loans';

                       $data['loans'] = $this->Loans_model->get_loans();
                        
        	           $this->load->view('templates/header', $data);
        	           $this->load->view('loans/index', $data);
        	           $this->load->view('templates/footer');
                }

                public function view($loan_id = null){
                        $data['loan'] = $this->Loans_model->get_loans($loan_id);

                        if(empty($data['loan'])){
                                show_404();
                        } 

                        $data['title'] = $data['loan']['loan_id'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('loans/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Loan';
                        $data['members'] = $this->Unitmembers_model->get_members();
                        $data['usernames'] = $this->User_model->get_users();
                        $data['equipment'] = $this->Equipment_model->get_equipment();
                        $data['loangroups'] = $this->Loangroups_model->get_loangroups();

                        $this->load->view('templates/header', $data);
                        $this->load->view('loans/create', $data);
                        $this->load->view('templates/footer');
                }

                public function delete($loan_id){
                        $this->Loans_model->delete_loan($loan_id);
                        redirect('loans');
                }

                public function edit($loan_id){
                        $data['loan'] = $this->Loans_model->get_loans($loan_id);
                        $data['members'] = $this->Unitmembers_model->get_members();
                        $data['usernames'] = $this->User_model->get_users();
                        $data['equipment'] = $this->Equipment_model->get_equipment();
                        $data['loangroups'] = $this->Loangroups_model->get_loangroups();

                        if(empty($data['loan'])){
                                show_404();
                        }

                        $data['title'] = 'Edit $loan_id';

                        $this->load->view('templates/header', $data);
                        $this->load->view('loans/update', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Loans_model->update_loan();
                        redirect('loans');
                }

                public function select_edit(){ 

                    $data['loans'] = $this->Loans_model->get_loans();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('loans/edit', $data);
                    $this->load->view('templates/footer');
                }
                
                public function select_delete(){ 

                    $data['loans'] = $this->Loans_model->get_loans();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('loans/delete', $data);
                    $this->load->view('templates/footer');
                }

        }
