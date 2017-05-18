<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Suppliers extends CI_Controller {
                public function index(){
                        $data['title'] = 'Supliers'; 

                         $data['suppliers'] = $this->Suppliers_model->get_suppliers();
                        
        	       $this->load->view('templates/header', $data);
        	       $this->load->view('suppliers/index', $data);
        	       $this->load->view('templates/footer');
                }

                public function view($supplier_id = null){
                        $data['supplier'] = $this->Suppliers_model->get_suppliers($supplier_id);

                        if(empty($data['supplier'])){
                                show_404();
                        }

                        $data['title'] = $data['supplier']['supplier_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('suppliers/view', $data);
                        $this->load->view('templates/footer');
                }

                public function create(){
                        $data['title'] = 'Create Supplier';

                        if($this->form_validation->run() === FALSE){
                                $this->load->view('templates/header', $data);
                                $this->load->view('suppliers/create', $data);
                                $this->load->view('templates/footer');  
                        } else {
                                $this->Suppliers_model->create_supplier();
                                redirect('suppliers');     
                        }
                }

                public function delete($supplier_id){
                        $this->Suppliers_model->delete_vehicle($supplier_id);
                        redirect('vehicles');
                }

                public function edit($supplier_id){
                        $data['supplier'] = $this->Suppliers_model->get_suppliers($supplier_id);

                        if(empty($data['supplier'])){
                                show_404();
                        }

                        $data['title'] = 'Edit Supplier';

                        $this->load->view('templates/header', $data);
                        $this->load->view('suppliers/update', $data);
                        $this->load->view('templates/footer');
                }

                public function update(){
                        $this->Suppliers_model->update_supplier();
                        redirect('suppliers');
                }

                public function select_edit(){ 

                    $data['suppliers'] = $this->Suppliers_model->get_suppliers();
                        
                    $this->load->view('templates/header', $data);
                    $this->load->view('suppliers/edit', $data);
                    $this->load->view('templates/footer');
                }

                public function select_delete(){ 

                    $data['suppliers'] = $this->Suppliers_model->get_suppliers();
                    
                    $this->load->view('templates/header', $data);
                    $this->load->view('suppliers/delete', $data);
                    $this->load->view('templates/footer');3wa 
                }
        }
?>
