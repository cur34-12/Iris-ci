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
                $this->load->library('rssparser');
                $data['rss'] = $this->rssparser->set_feed_url('http://rss.weatherzone.com.au/?u=12994-1285&lt=aploc&lc=624&obs=1&fc=1&warn=1')->set_cache_life(30)->getFeed(2);

                $data['duties'] = $this->Duties_model->get_duties();

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
