<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    use Zend\Barcode;
	//use Zend\Barcode\Barcode;

	class Generatebarcode extends MY_Controller {

		public function index()
		{
			//I'm just using rand() function for data example
			$temp = rand(10000, 99999);
			$this->set_barcode($temp);
		}
		
		private function set_barcode($code)
		{
			//load library
			$this->load->library('zend');
			//load in folder Zend
			$this->zend->load('Zend/Barcode');
			//generate barcode
			Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
		}
		
	}