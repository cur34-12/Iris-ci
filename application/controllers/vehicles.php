<?php
        class Vehicles extends CI_Controller {
                public function index(){
                        $data['title'] = 'Vehicles'; 

        	       $this->load->view('templates/header', $data);
        	       $this->load->view('vehicles/index', $data);
        	       $this->load->view('templates/footer');
        }
}