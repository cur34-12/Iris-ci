<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Barcoding extends CI_Controller {

		public function ean13($barcode_var)
		{
			$this->set_barcode_ean13($barcode_var);
		}
		
		private function set_barcode_ean13($code) {
			//load library
			$this->load->library('zend');
			//load in folder Zend
			$this->zend->load('Zend/Barcode');
			//generate barcode
			$filename = APPPATH.'barcodes/ean13/ean13-'.echo($code).'.png';
			$imageResource = Zend_Barcode::render('ean13', 'image', array('text'=>$code), array());
			file_put_contents($filename, $imageResource);
		}

		public function qr() {
			$this->set_barcode_qr();
		}
		
		private function set_barcode_qr($code) {
			header("Content-Type: image/png");
			$params['data'] = $code;
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = FCPATH.'\applications\barcodes\qr\.png';

			$this->ciqrcode->generate($params);
		}	
	}