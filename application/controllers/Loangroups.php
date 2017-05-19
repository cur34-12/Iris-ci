<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        //use Zend\Barcode\Barcode;

        class Loangroups extends CI_Controller {
                public function index(){
                       $data['title'] = 'Loan Groups';

                       $data['loans'] = $this->Loangroups_model->get_loangroups();
                        
        	           $this->load->view('templates/header', $data);
        	           $this->load->view('loans/groups/index', $data);
        	           $this->load->view('templates/footer');
                }

                public function view($loangroup_id = null){
                        $data['loangroup'] = $this->Loangroups_model->get_loangroups($loangroup_id);
                        $data['loans'] = $this->Loans_model->get_loans($loangroup_id);

                        if(empty($data['loangroups'])){
                                show_404();
                        } 

                        $data['title'] = $data['loangroup']['loangroup_id'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('loans/groups/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Loan Group';
                        $data['members'] = $this->Unitmembers_model->get_members();

                        $this->load->view('templates/header', $data);
                        $this->load->view('loans/groups/create', $data);
                        $this->load->view('templates/footer');
                }

                public function delete($loangroup_id){
                        $this->Loangroups_model->delete_loan($loangroup_id);
                        redirect('loangroups');
                }

                public function edit($loangroup_id){
                        $data['loangroup'] = $this->Loangroups_model->get_loangroups($loan_id);
                        $data['members'] = $this->Unitmembers_model->get_members();

                        if(empty($data['loangroup'])){
                                show_404();
                        }

                        $data['title'] = 'Edit $loangroup_id';

                        $this->load->view('templates/header', $data);
                        $this->load->view('loans/groups/update', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Loangroups_model->update_loangroup();
                        redirect('loangroups');
                }

                public function select_edit(){ 

                    $data['loangroups'] = $this->Loangroups_model->get_loangroups();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('loans/groups/edit', $data);
                    $this->load->view('templates/footer');
                }
                
                public function select_delete(){ 

                    $data['loangroups'] = $this->Loangroups_model->get_loangroups();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('loans/groups/delete', $data);
                    $this->load->view('templates/footer');
                }

        }
