<?php
class barcode extends MY_Controller {

    public function index()
    {
        //I'm just using rand() function for data example
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');

        $barcodeOptions = array('text' => 'ZEND-FRAMEWORK');
        $rendererOptions = array('imageType'          =>'png', 
                                 'horizontalPosition' => 'center', 
                                 'verticalPosition'   => 'middle');
        $imageResource= Zend_Barcode::factory('code39', 'image', $barcodeOptions, $rendererOptions)->render();
        return $imageResource;   
    }
}
?>