<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Duties_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //
    //
    //Duties
    //
    //

    public function get_duties()
    {
        $query = $this->db->get('current_duties');
        return $query->row_array();
    }

    //public function update_duties()
    //{
    //    $data = array(
    //        'duties_id' => $this->input->post('eq_name'),
    //        'eq_description' => $this->input->post('eq_description'),
    //        'eq_consumable' => $this->input->post('eq_consumable'),
    //        'eq_size' => $this->input->post('eq_size'),
    //        'eq_brand' => $this->input->post('eq_brand'),
     //       'eq_supplier' => $this->input->post('eq_supplier'),
     //       'eq_in_service' => $this->input->post('eq_in_service'),
     //       'eq_inspection_frequency' => $this->input->post('eq_inspection_frequency'),
     //       'eq_category' => $this->input->post('eq_category'),
     //       'eq_date_purchased' => $this->input->post('eq_date_purchased'),
     //       'eq_end_life' => $this->input->post('eq_end_life'),
     //       'eq_purchase_type' => $this->input->post('eq_purchase_type'),
    //        'eq_model' => $this->input->post('eq_model'),
     //       'eq_asset_number' => $this->input->post('eq_asset_number'),
     //       'eq_serial' => $this->input->post('eq_serial'),
     //       'eq_group_id' => $this->input->post('eq_group_id')
     //   );
//
     //   $this->db->where('duties_id', $this->input->post('duties_id'));
     //   return $this->db->update('current_duties', $data);
   // }

}