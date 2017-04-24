<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Barcoding extends CI_Controller {
		
		public function create_code39($code) 
		{
			$this->load->library('zend');
			$this->zend->load('Zend/Barcode');
			$filename = APPPATH.'barcodes/code39/code39-'.echo($code).'.png';
			$imageResource = Zend_Barcode::render('code39', 'image', array('text'=>$code), array());
			imagepng($filename, $imageResource);
		}
		
		public function create_qr($code) {
			$params['data'] = $code;
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = APPPATH.'barcodes/qr/qr-'.echo($code).'.png';

			$this->ciqrcode->generate($params);
		}	
	}