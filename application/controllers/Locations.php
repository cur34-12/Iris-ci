<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Locations extends CI_Controller {
                public function index(){
                        $data['title'] = 'Locations';

                         $data['locations'] = $this->Locations_model->get_locations();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('locations/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($loc_id = null){
                        $data['location'] = $this->Locations_model->get_locations($loc_id);

                        if(empty($data['location'])){
                                show_404();
                        }

                        $data['title'] = $data['location']['loc_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('locations/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create location';

                        $this->form_validation->set_rules('loc_name', 'Name', 'required');

                        if($this->form_validation->run() === FALSE){
                                $this->load->view('templates/header', $data);
                                $this->load->view('locations/create', $data);
                                $this->load->view('templates/footer');  
                        } else {
                                $this->Locations_model->create_location();
                                redirect('locations');
                        }
                }

                public function delete($loc_id){
                        $this->Locations_model->delete_location($loc_id);
                        redirect('locations');
                }

                public function edit($loc_id){
                        $data['location'] = $this->Locations_model->get_locations($loc_id);

                        if(empty($data['location'])){
                                show_404();
                        }

                        $data['title'] = 'Edit location';

                        $this->load->view('templates/header', $data);
                        $this->load->view('locations/update', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Locations_model->update_location();
                        redirect('locations');
                }

                public function select_edit(){ 

                    $data['locations'] = $this->Locations_model->get_locations();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('locations/edit', $data);
                    $this->load->view('templates/footer');
                }

                public function select_delete(){ 

                    $data['locations'] = $this->Locations_model->get_locations();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('locations/delete', $data);
                    $this->load->view('templates/footer');
                }
        }
?>
