<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Issues extends CI_Controller {
                public function index(){

                    $data['title'] = 'Issues'; 

                    $data['issues'] = $this->Issues_model->get_issues();

                    $this->load->view('templates/header/header-required', $data);
                    $this->load->view('templates/header/header-sidebar');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('issues/index', $data);
                    $this->load->view('templates/footer/footer-required');
                }

                public function view($iss_id = null){

                    $data['issue'] = $this->Issues_model->get_issues($iss_id);
                    $data['equipment'] = $this->Equipment_model->get_equipment();
                    $data['members'] = $this->Unitmembers_model->get_members();
                    $data['usernames'] = $this->User_model->get_users();
                    $data['comments'] = $this->Issues_model->get_comments($iss_id);

                    if(empty($data['issue'])){
                            show_404();
                    }

                    $data['title'] = $data['issue']['iss_title'];

                    $this->load->view('templates/header/header-required', $data);
                    $this->load->view('templates/header/header-sidebar');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('issues/view', $data);
                    $this->load->view('templates/footer/footer-required');
                }

                public function create($eq_id = null){
                    
                    $data['usernames'] = $this->User_model->get_users();
                    $data['equipment'] = $this->Equipment_model->get_equipment($eq_id);
                    $data['members'] = $this->Unitmembers_model->get_members();

                    $data['title'] = 'Create Issue';

                    $this->form_validation->set_rules('iss_title', 'Title', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header-required', $data);
                        $this->load->view('templates/header/header-sidebar');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('issues/create', $data);
                        $this->load->view('templates/footer/footer-required');
                    } else {
                        $this->Issues_model->create_issue();
                        redirect('issues');
                    }
                }

                public function delete($iss_id){

                    $this->Issues_model->delete_issue($iss_id);
                    redirect('issues');
                }

                public function edit($iss_id = null){

                    $data['issue'] = $this->Issues_model->get_issues($iss_id);
                    $data['usernames'] = $this->User_model->get_users();
                    $data['equipment'] = $this->Equipment_model->get_equipment();
                    $data['members'] = $this->Unitmembers_model->get_members();

                    if(empty($data['issue'])){
                            show_404();
                    }

                    $data['title'] = 'Edit Issue';

                    $this->load->view('templates/header/header-required', $data);
                    $this->load->view('templates/header/header-sidebar');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('issues/update', $data);
                    $this->load->view('templates/footer/footer-required');
                }

                public function update(){

                    $this->Issues_model->update_issue();
                    redirect('issues');
                }

                public function select_edit(){ 

                    $data['issues'] = $this->Issues_model->get_issues();

                    $this->load->view('templates/header/header-required', $data);
                    $this->load->view('templates/header/header-sidebar');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('issues/edit', $data);
                    $this->load->view('templates/footer/footer-required');
                }

                public function select_delete(){ 

                    $data['issues'] = $this->Issues_model->get_issues();

                    $this->load->view('templates/header/header-required', $data);
                    $this->load->view('templates/header/header-sidebar');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('issues/delete', $data);
                    $this->load->view('templates/footer/footer-required');
                }

                public function new_comment($iss_id = null){

                    $data['issue'] = $this->Issues_model->get_issues($iss_id);

                    $data['title'] = 'Add Comment';

                    $this->form_validation->set_rules('isscom_comment', 'Comment', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header-required', $data);
                        $this->load->view('templates/header/header-sidebar');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('issues/comment', $data);
                        $this->load->view('templates/footer/footer-required');
                    } else {
                        $this->Issues_model->new_comment();
                        redirect('issues/'.$iss_id);
                    }
                }

                public function delete_comment($isscom_id){

                    $this->Issues_model->delete_comment($isscom_id);
                    redirect('issues');
                }

                public function create_event(){

                    $data['title'] = 'Create Event';

                    $this->form_validation->set_rules('event_title', 'Title', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header-required', $data);
                        $this->load->view('templates/header/header-sidebar');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('issues/event', $data);
                        $this->load->view('templates/footer/footer-required');
                    } else {
                        $this->Events_model->create_event();
                        redirect('calendar');
                    }
            }
        }
?>