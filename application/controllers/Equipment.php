<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        use Zend\Barcode\Barcode;

        class Equipment extends MY_Controller {
                public function index(){
                    $data['title'] = 'Equipment'; 

                    $data['equipment'] = $this->Equipment_model->get_equipment();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('equipment/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($equipmentID = null){
                        $data['equipment'] = $this->Equipment_model->get_equipment($equipmentID);

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

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipment/create', $data);
                        $this->load->view('templates/footer');
                }

                public function delete($equipmentID){
                        $this->Equipment_model->delete_equipment($equipmentID);
                        redirect('equipment');
                }

                public function edit($equipmentID){
                        $data['equipment'] = $this->Equipment_model->get_equipment($equipmentID);

                        if(empty($data['equipment'])){
                                show_404();
                        }

                        $data['title'] = 'Edit Equipment';

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipment/update', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Equipment_model->update_equipment();
                        redirect('equipment');
                }

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
