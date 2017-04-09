<?php
        class Equipment extends CI_Controller {
                public function index(){
                        $data['title'] = 'Equipment'; 

                         $data['equipment'] = $this->equipment_model->get_equipment();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('equipment/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($equipmentID = null){
                        $data['equipment'] = $this->equipment_model->get_equipment($equipmentID);

                        if(empty($data['equipment'])){
                                show_404();
                        }

                        $data['title'] = $data['equipment']['name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipment/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Equipment';

                        $this->form_validation->set_rules('name', 'Name', 'required');

                        if($this->form_validation->run() === FALSE){
                                $this->load->view('templates/header', $data);
                                $this->load->view('equipment/create', $data);
                                $this->load->view('templates/footer');  
                        } else {
                                $this->equipment_model->create_equipment();
                                redirect('equipment');     
                        }
                }

                public function delete($name){
                        $this->equipment_model->delete_equipment($name);
                        redirect('equipment');
                }

                public function edit($name){
                        $data['equipment'] = $this->equipment_model->get_equipment($name);

                        if(empty($data['equipment'])){
                                show_404();
                        }

                        $data['title'] = 'Edit Equipment';

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipment/edit', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->equipment_model->update_equipment();
                        redirect('equipment');
                }
                
        }
?>