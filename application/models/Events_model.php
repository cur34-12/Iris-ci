<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Events_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_events($event_category = FALSE){
            if($event_category === FALSE or is_null($event_category)){
                $this->db->order_by('event_id', 'ASC');
                $query = $this->db->get('events');
                return $query->result_array();
            }
            $query = $this->db->get_where('events', array('event_category' => $event_category));
            return $query->row_array();
        }

        public function create_event(){
            $data = array(
                'event_title' => $this->input->post('event_title'),
                'event_allday' => $this->input->post('event_allday'),
                'event_start' => $this->input->post('event_start'),
                'event_end' => $this->input->post('event_end'),
                'event_url' => $this->input->post('event_url'),
                'event_classname' => $this->input->post('event_classname'),
                'event_starteditable' => $this->input->post('event_starteditable'),
                'event_durationeditable' => $this->input->post('event_durationeditable'),
                'event_resourceeditable' => $this->input->post('event_resourceeditable'),
                'event_rendering' => $this->input->post('event_rendering'),
                'event_overlap' => $this->input->post('event_overlap'),
                'event_constraint' => $this->input->post('event_constraint'),
                'event_source' => $this->input->post('event_source'),
                'event_backgroundcolor' => $this->input->post('event_backgroundcolor'),
                'event_bordercolor' => $this->input->post('event_bordercolor'),
                'event_textcolor' => $this->input->post('event_textcolor'),
                'event_createdby' => $this->input->post('event_createdby'),
                'event_createddate' => $this->input->post('event_createddate'),
                'event_modifiedby' => $this->input->post('event_modifiedby'),
                'event_lastmodified' => $this->input->post('event_lastmodified'),
                'event_category' => $this->input->post('event_category')
            );

            $this->db->insert('events', $data);
        }

        public function update_events(){
            $data = array(
                'event_id' => $this->input->post('event_id'),
                'event_title' => $this->input->post('event_title'),
                'event_allday' => $this->input->post('event_allday'),
                'event_start' => $this->input->post('event_start'),
                'event_end' => $this->input->post('event_end'),
                'event_url' => $this->input->post('event_url'),
                'event_classname' => $this->input->post('event_classname'),
                'event_starteditable' => $this->input->post('event_starteditable'),
                'event_durationeditable' => $this->input->post('event_durationeditable'),
                'event_resourceeditable' => $this->input->post('event_resourceeditable'),
                'event_rendering' => $this->input->post('event_rendering'),
                'event_overlap' => $this->input->post('event_overlap'),
                'event_constraint' => $this->input->post('event_constraint'),
                'event_source' => $this->input->post('event_source'),
                'event_backgroundcolor' => $this->input->post('event_backgroundcolor'),
                'event_bordercolor' => $this->input->post('event_bordercolor'),
                'event_textcolor' => $this->input->post('event_textcolor'),
                'event_createdby' => $this->input->post('event_createdby'),
                'event_createddate' => $this->input->post('event_createddate'),
                'event_modifiedby' => $this->input->post('event_modifiedby'),
                'event_lastmodified' => $this->input->post('event_lastmodified'),
                'event_category' => $this->input->post('event_category')
            );

            $this->db->where('event_id', $this->input->post('event_id'));
            return $this->db->update('events', $data);
        }


    }