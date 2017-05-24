<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        //Equipment

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
                        $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();
                        $data['issues'] = $this->Equipment_model->get_equipment_issues($eq_id);

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
                        $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();

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
                        $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();

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


                //Equipment Groups

                public function eqgroups_index(){
                    $data['title'] = 'Equipment Groups'; 

                    $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();

                    $this->load->view('templates/header', $data);
                    $this->load->view('equipmentgroups/index', $data);
                    $this->load->view('templates/footer');
                }

                public function eqgroups_view($eqgroup_id = null){
                        $data['equipmentgroup'] = $this->Equipment_model->get_equipment_groups($eqgroup_id);
                        $data['items'] = $this->Equipment_model->get_group_equipment($eqgroup_id);
                        $data['categories'] = $this->Equipment_model->get_categories();

                        if(empty($data['equipmentgroup'])){
                                show_404();
                        } 
                        

                        $data['title'] = $data['equipmentgroup']['eqgroup_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipmentgroups/view', $data);
                        $this->load->view('templates/footer');
                }

                public function eqgroups_create(){
                        $data['title'] = 'Create Equipment';
                        $data['categories'] = $this->Equipment_model->get_categories();
                        $data['equipment'] = $this->Equipment_model->get_equipment();

                        $this->form_validation->set_rules('eq_name', 'Name', 'required');

                        if($this->form_validation->run() === FALSE){
                            $this->load->view('templates/header', $data);
                            $this->load->view('equipmentgroups/create', $data);
                            $this->load->view('templates/footer');
                        } else {
                                $this->Equipment_model->create_equipment();
                                redirect('equipment');
                        }
                }

                public function eqgroups_delete($eqgroup_id){
                        $this->Equipment_model->delete_equipment($eq_id);
                        redirect('equipment');
                }

                public function eqgroups_edit($eqgroup_id){
                        $data['equipmentgroup'] = $this->Equipment_model->get_equipment_groups($eqgroup_id);
                        $data['categories'] = $this->Equipment_model->get_categories();
                        $data['equipment'] = $this->Equipment_model->get_equipment();

                        if(empty($data['equipmentgroup'])){
                                //show_404();
                        }

                        $data['title'] = 'Edit Equipment Group';

                        $this->load->view('templates/header', $data);
                        $this->load->view('equipmentgroups/update', $data);
                        $this->load->view('templates/footer');
                }

                public function eqgroups_update(){
                        $this->Equipment_model->update_equipment_group();
                        redirect('equipment-groups');
                }


                public function eqgroups_select_edit(){ 

                    $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('equipmentgroups/edit', $data);
                    $this->load->view('templates/footer');
                }
                
                public function eqgroups_select_delete(){ 

                    $data['equipmentgroups'] = $this->Equipment_model->get_equipment_groups();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('equipment/delete', $data);
                    $this->load->view('templates/footer');
                }
        }
