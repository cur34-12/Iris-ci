<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        class Pages extends MY_Controller {

            //Pages

            function suppliers()
            {
                $crud = new grocery_CRUD();
                $crud->set_table('suppliers');

                $output = $crud->render();

                $this->_example_output($output);
            }
            public function _example_output($output = null)
            {
                $this->load->view('example.php',(array)$output);
            }

            public function calendar()
            {
                $data['events'] = $this->Events_model->get_events();

                $data['title'] = 'Calendar';

                $this->load->view('templates/header/header', $data);
                $this->load->view('pages/calendar', $data);
                $this->load->view('templates/footer/footer');
            }

            public function dodash()
            {
                $this->load->library('rssparser');
                $data['rss_weather'] = $this->rssparser->set_feed_url('http://rss.weather.com.au/nsw/sydney')->set_cache_life(30)->getFeed(2);
                $data['rss_warnings'] = $this->rssparser->set_feed_url('http://www.bom.gov.au/fwo/IDZ00054.warnings_nsw.xml')->set_cache_life(30)->getFeed(10);
                $data['duties'] = $this->Duties_model->get_duties();

                $data['title'] = 'Duty Officer - Dash';

                $this->load->view('templates/header/header', $data);
                $this->load->view('pages/dodash', $data);
                $this->load->view('templates/footer/footer');
            }

            public function view($page = 'home')
            {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer/footer');
            }



        }
