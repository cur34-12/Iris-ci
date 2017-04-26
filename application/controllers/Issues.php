<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Issues extends MY_Controller {
                public function index(){
                    $data['title'] = 'Issues'; 

                    $data['issues'] = $this->Issues_model->get_issues();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('issues/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($iss_id = null){
                        $data['issue'] = $this->Issues_model->get_issues($iss_id);

                        if(empty($data['issue'])){
                                show_404();
                        }

                        $data['title'] = $data['issue']['iss_id'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('issues/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Issue';
                        $data['usernames'] = $this->User_model->get_users();
                        $data['equipment'] = $this->Equipment_model->get_equipment();

                        $this->form_validation->set_rules('title', 'Title', 'required');

                        if($this->form_validation->run() === FALSE){
                                $this->load->view('templates/header', $data);
                                $this->load->view('issues/create', $data);
                                $this->load->view('templates/footer');  
                    }
                }


                public function delete($iss_id){
                        $this->Issues_model->delete_issue($iss_id);
                        redirect('issues');
                }

                public function edit($iss_id){
                        $data['issue'] = $this->Issues_model->get_issues($iss_id);
                        $data['usernames'] = $this->User_model->get_users();
                        $data['equipment'] = $this->Equipment_model->get_equipment();

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