<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Vehicles extends CI_Controller {
                public function index(){
                        $data['title'] = 'Vehicles'; 

                         $data['vehicles'] = $this->Vehicle_model->get_vehicles();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('vehicles/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($name = null){
                        $data['vehicle'] = $this->Vehicle_model->get_vehicles($name);

                        if(empty($data['vehicle'])){
                                show_404();
                        }

                        $data['title'] = $data['vehicle']['name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('vehicles/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Vehicle';

                        $this->form_validation->set_rules('name', 'Name', 'required');

                        if($this->form_validation->run() === FALSE){
                                $this->load->view('templates/header', $data);
                                $this->load->view('vehicles/create', $data);
                                $this->load->view('templates/footer');  
                        } else {
                                $this->Vehicle_model->create_vehicle();
                                redirect('vehicles');     
                        }
                }

                public function delete($name){
                        $this->Vehicle_model->delete_vehicle($name);
                        redirect('vehicles');
                }

                public function edit($name){
                        $data['vehicle'] = $this->Vehicle_model->get_vehicles($name);

                        if(empty($data['vehicle'])){
                                show_404();
                        }

                        $data['title'] = 'Edit Vehicle';

                        $this->load->view('templates/header', $data);
                        $this->load->view('vehicles/edit', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Vehicle_model->update_vehicle();
                        redirect('vehicles');
                }
                
        }
?>