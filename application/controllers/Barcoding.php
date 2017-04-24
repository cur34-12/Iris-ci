<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    //use Zend\Barcode;
	//use Zend\Barcode\Barcode;

	class Barcoding extends CI_Controller {

		public function ean13()
		{
			//I'm just using rand() function for data example
			$temp = rand(10000, 99999);
			$this->set_barcode_ean13($temp);
		}
		
		private function set_barcode_ean13($code)
		{
			//load library
			$this->load->library('zend');
			//load in folder Zend
			$this->zend->load('Zend/Barcode');
			//generate barcode
			Zend_Barcode::render('ean13', 'image', array('text'=>$code), array());
		}

		public function qr()
		{
			$this->set_barcode_qr();
		}
		
		private function set_barcode_qr($code)
		{
			header("Content-Type: image/png");
			$params['data'] = 'This is a text to encode become QR Code';
			$this->ciqrcode->generate($params);
		}

		
	}