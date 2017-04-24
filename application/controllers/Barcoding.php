<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Barcoding extends CI_Controller {

		public function create_code39($barcode_var)
		{
			$this->set_barcode_code39($barcode_var);
		}
		
		private function set_barcode_code39($code) {
			//load library
			$this->load->library('zend');
			//load in folder Zend
			$this->zend->load('Zend/Barcode');
			//generate barcode
			$filename = APPPATH.'barcodes/code39/code39-'.echo($code).'.png';
			$imageResource = Zend_Barcode::render('code39', 'image', array('text'=>$code), array());
			file_put_contents($filename, $imageResource);
		}

		public function create_qr($qr_val)
		{
			$this->set_barcode_qr($qr_val);
		}
		
		private function set_barcode_qr($code) {
			header("Content-Type: image/png");
			$params['data'] = $code;
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = APPPATH.'barcodes/qr/qr-'.echo($code).'.png';

			$this->ciqrcode->generate($params);
		}	
	}