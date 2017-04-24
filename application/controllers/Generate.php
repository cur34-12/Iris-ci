<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
    use Zend\Barcode\Barcode;

   function generatebarcode(){
       $this->set_barcode("12345");
   }

   private function set_barcode($code)
   {

        $file = Barcode::draw('code128', 'image', array('text' => $code), array());

        $store_image = imagepng($file,FCPATH."assets/barcode/{$code}.png");

   }