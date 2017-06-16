<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        class Pages extends MY_Controller {

            //Pages

            public function calendar()
            {
                $data['events'] = $this->Events_model->get_events();

                $data['title'] = 'Calendar';

                $this->load->view('templates/header/header-required', $data);
                $this->load->view('templates/header/header-sidebar');
                $this->load->view('templates/header/header-container');
                $this->load->view('pages/calendar', $data);
                $this->load->view('templates/footer/footer-required');
            }

            public function dodash()
            {
                $data['duties'] = $this->Pages_model->get_duties();

                $data['title'] = 'Duty Officer - Dash';

                $this->load->view('templates/header/header-required', $data);
                $this->load->view('templates/header/header-sidebar');
                $this->load->view('templates/header/header-container');
                $this->load->view('pages/dodash', $data);
                $this->load->view('templates/footer/footer-required');
            }

            public function view($page = 'home')
            {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header/header-required', $data);
                $this->load->view('templates/header/header-sidebar');
                $this->load->view('templates/header/header-container');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer/footer-required');
            }


        }
