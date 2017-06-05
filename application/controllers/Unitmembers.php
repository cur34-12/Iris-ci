<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        //Members

        class Unitmembers extends CI_Controller {
                public function index(){

                    $data['title'] = 'Members'; 

                    $data['members'] = $this->Unitmembers_model->get_members();
                        
                        $this->load->view('templates/header', $data);
                        $this->load->view('members/index', $data);
                        $this->load->view('templates/footer');
                }

                public function view($member_id = null){

                    $data['member'] = $this->Unitmembers_model->get_members($member_id);

                    if(empty($data['member'])){
                            show_404();
                    }

                    $data['title'] = $data['member']['member_name'];

                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('members/view', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function create(){

                    $data['title'] = 'Create member';

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header-resources-std', $data);
                        $this->load->view('templates/header/header-nav');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('members/create', $data);
                        $this->load->view('templates/footer/footer-container');
                        $this->load->view('templates/footer/footer-required');  
                    } else {
                            $this->Unitmembers_model->create_member();
                            redirect('members');     
                    }
                }

                public function delete($member_id){

                        $this->Unitmembers_model->delete_vehicle($member_id);
                        redirect('vehicles');
                }

                public function edit($member_id){

                    $data['member'] = $this->Unitmembers_model->get_members($member_id);

                    if(empty($data['member'])){
                            show_404();
                    }

                    $data['title'] = 'Edit member';

                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('members/update', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function update(){

                    $this->Unitmembers_model->update_member();
                    redirect('members');
                }

                public function select_edit(){ 

                    $data['members'] = $this->Unitmembers_model->get_members();

                    $data['title'] = 'Logi - Edit';
                        
                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('members/edit', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function select_delete(){ 

                    $data['members'] = $this->Unitmembers_model->get_members();

                    $data['title'] = 'Logi - Delete';
                    
                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('members/delete', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }
        }
?>
