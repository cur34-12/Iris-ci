<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        //use Zend\Barcode\Barcode;

        class Equipment extends CI_Controller {
                public function index(){
                    $data['title'] = 'Equipment'; 

                    $data['equipment'] = $this->Equipment_model->get_equipment();

                    $this->load->view('templates/header', $data);
                    $this->load->view('equipment/index', $data);
                    $this->load->view('templates/footer');
                }

                public function view($eq_id = null){
                        $data['equipment'] = $this->Equipment_model->get_equipment($eq_id);
                        $data['categories'] = $this->Equipment_model->get_categories();
                        $data['assemblies'] = $this->Equipment_model->get_assemblies();

                        if(empty($data['equipment'])){
                                show_404();
                        } 

                        $data['title'] = $data['equipment']['eq_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipment/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Equipment';
                        $data['categories'] = $this->Equipment_model->get_categories();
                        $data['assemblies'] = $this->Equipment_model->get_assemblies();

                        $this->form_validation->set_rules('eq_name', 'Name', 'required');

                        if($this->form_validation->run() === FALSE){
                            $this->load->view('templates/header', $data);
                            $this->load->view('equipment/create', $data);
                            $this->load->view('templates/footer');
                        } else {
                                $this->Equipment_model->create_equipment();
                                redirect('equipment');
                        }
                }

                public function delete($eq_id){
                        $this->Equipment_model->delete_equipment($eq_id);
                        redirect('equipment');
                }

                public function edit($eq_id){
                        $data['equipment'] = $this->Equipment_model->get_equipment($eq_id);
                        $data['categories'] = $this->Equipment_model->get_categories();
                        $data['assemblies'] = $this->Equipment_model->get_assemblies();

                        if(empty($data['equipment'])){
                                show_404();
                        }

                        $data['title'] = 'Edit $eq_name';

                        if($this->form_validation->run() === FALSE){
                            $this->load->view('templates/header', $data);
                            $this->load->view('equipment/update', $data);
                            $this->load->view('templates/footer');
                        } else {
                            $this->Equipment_model->update_equipment();
                            redirect('equipment');
                        }
                }

                //public function update(){
                 //       $this->Equipment_model->update_equipment();
                  //      redirect('equipment');
                //}

                public function select_edit(){ 

                    $data['equipment'] = $this->Equipment_model->get_equipment();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('equipment/edit', $data);
                    $this->load->view('templates/footer');
                }
                
                public function select_delete(){ 

                    $data['equipment'] = $this->Equipment_model->get_equipment();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('equipment/delete', $data);
                    $this->load->view('templates/footer');
                }

        }
