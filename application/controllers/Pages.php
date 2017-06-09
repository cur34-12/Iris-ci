<?php
        class Pages extends CI_Controller {
                public function view($page = 'home')
                {
                        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                        {
                                show_404();
                        }

                        $data['title'] = ucfirst($page); // Capitalize the first letter               

                        $this->load->view('templates/header/header-resources-std', $data);
                        $this->load->view('templates/header/header-sidebar');
                        $this->load->view('templates/header/header-sidebar-container');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('pages/'.$page, $data);
                        $this->load->view('templates/footer/footer-container');
                        $this->load->view('templates/footer/footer-required');
                }
        }
