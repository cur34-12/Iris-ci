<?php

class Zend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('zend');
        $this->zend->load('zend/barcode');
    }

    public function index() {
        $temp = rand(10000, 99999);
        echo $this->set_barcode($temp);
    }

    private function set_barcode($code)
    {
        return Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
    }
}