<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        class Pages extends MY_Controller {

            //Pages

            public function login_page()
            {
                $data['title'] = 'Login';

                // Method should not be directly accessible
                if( $this->uri->uri_string() == 'login')
                    show_404();

                if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
                    $this->require_min_level(1);

                $this->setup_login_form();

                $html = $this->load->view('templates/header/header-required', '', TRUE);
                $html .= $this->load->view('templates/header/header-sidebar', '', TRUE);
                $html .= $this->load->view('templates/header/header-container', '', TRUE);
                $html .= $this->load->view('login', '', TRUE);
                $html .= $this->load->view('templates/footer/footer-required', '', TRUE);

                echo $html;
            }

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
                $data['rss_weather'] = $this->rssparser->set_feed_url('http://rss.weather.com.au/nsw/sydney')->set_cache_life(30)->getFeed(2);
                $data['rss_warnings'] = $this->rssparser->set_feed_url('http://www.bom.gov.au/fwo/IDZ00054.warnings_nsw.xml')->set_cache_life(30)->getFeed(10);
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
