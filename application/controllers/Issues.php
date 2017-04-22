<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Issues extends MY_Controller {
                public function index(){
                        $data['title'] = 'Issues'; 

                         $data['issues'] = $this->Issues_model->get_issues();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('issues/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($issueID = null){
                        $data['issue'] = $this->Issues_model->get_issues($issueID);

                        if(empty($data['issue'])){
                                show_404();
                        }

                        $data['title'] = $data['issue']['issueID'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('issues/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                    if( $this->require_role('admin') )
                    {
                        $data['title'] = 'Create Issue';
                        $data['user_list'] = $this->Issues_model->get_user_dropdown_list();

                        $this->form_validation->set_rules('title', 'Title', 'required');

                        if($this->form_validation->run() === FALSE){
                                $this->load->view('templates/header', $data);
                                $this->load->view('issues/create', $data);
                                $this->load->view('templates/footer');  
                        } else {
                                $this->Issues_model->create_issue();
                                redirect('issues');     
                        }
                    }
                }


                public function delete($issueID){
                        $this->Issues_model->delete_issue($issueID);
                        redirect('issues');
                }

                public function edit($issueID){
                        $data['issue'] = $this->Issues_model->get_issues($issueID);

                        if(empty($data['issue'])){
                                show_404();
                        }

                        $data['title'] = 'Edit Issue';

                        $this->load->view('templates/header', $data);
                        $this->load->view('issues/update', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Issues_model->update_issue();
                        redirect('issues');
                }

                public function select_edit(){ 

                    $data['issues'] = $this->Issues_model->get_issues();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('issues/edit', $data);
                    $this->load->view('templates/footer');
                }

                public function select_delete(){ 

                    $data['issues'] = $this->Issues_model->get_issues();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('issues/delete', $data);
                    $this->load->view('templates/footer');
                }
        }
?>