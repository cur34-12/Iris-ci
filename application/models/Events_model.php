<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Events_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_events($event_id = FALSE){
            if($event_id === FALSE or is_null($event_id)){
                $this->db->order_by('event_id', 'ASC');
                $query = $this->db->get('events');
                return $query->result_array();
            }
            $query = $this->db->get_where('events', array('event_id' => $event_id));
            return $query->row_array();
        }

        public function create_event(){
            $data = array(
                'eq_name' => $this->input->post('eq_name'),
                'eq_group_id' => $this->input->post('eq_group_id')
            );

            $this->db->insert('events', $data);
        }

        public function update_events(){
            $data = array(
                'eq_name' => $this->input->post('eq_name'),
                'eq_group_id' => $this->input->post('eq_group_id')
            );

            $this->db->where('event_id', $this->input->post('event_id'));
            return $this->db->update('events', $data);
        }


    }