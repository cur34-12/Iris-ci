<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        //Vehicles

        class Vehicles extends CI_Controller {
                public function index(){

                    $data['vehicles'] = $this->Vehicle_model->get_vehicles();

                    $data['title'] = 'Vehicles';
                        
                    $this->load->view('templates/header/header-resources-datatable', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container-95');
                    $this->load->view('vehicles/index', $data);
                    $this->load->view('templates/footer/footer-datatable');
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function view($veh_id = null){

                    $data['vehicle'] = $this->Vehicle_model->get_vehicles($veh_id);

                    if(empty($data['vehicle'])){
                            show_404();
                    }

                    $data['title'] = $data['vehicle']['veh_name'];

                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('vehicles/view', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function create(){

                    $data['title'] = 'Create Vehicle';

                    $this->form_validation->set_rules('veh_name', 'Name', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header-resources-std', $data);
                        $this->load->view('templates/header/header-nav');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('vehicles/create', $data);
                        $this->load->view('templates/footer/footer-container');
                        $this->load->view('templates/footer/footer-required');
                    } else {
                        $this->Vehicle_model->create_vehicle();
                        redirect('vehicles');     
                    }
                }

                public function delete($veh_id){

                    $this->Vehicle_model->delete_vehicle($veh_id);
                    redirect('vehicles');
                }

                public function edit($veh_id){

                    $data['vehicle'] = $this->Vehicle_model->get_vehicles($veh_id);

                    if(empty($data['vehicle'])){
                            show_404();
                    }

                    $data['title'] = 'Edit Vehicle';

                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('vehicles/update', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function update(){

                    $this->Vehicle_model->update_vehicle();
                    redirect('vehicles');
                }

                public function select_edit(){ 

                    $data['vehicles'] = $this->Vehicle_model->get_vehicles();
                        
                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('vehicles/edit', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }

                public function select_delete(){ 

                    $data['vehicles'] = $this->Vehicle_model->get_vehicles();
                        
                    $this->load->view('templates/header/header-resources-std', $data);
                    $this->load->view('templates/header/header-nav');
                    $this->load->view('templates/header/header-container');
                    $this->load->view('vehicles/delete', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer-required');
                }
        }
?>
