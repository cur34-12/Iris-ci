<?php
        class Pages extends CI_Controller {
                public function view($page = 'home')
                {
        	       if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        	       {
                        // Whoops, we don't have a page for that!
                        show_404();
        	       }

                        $data['title'] = ucfirst($page); // Capitalize the first letter
                        $data['lang'] = $this->setting['site_language'];                 
                
                        $this->languages->get_lang($data['lang']);
                
                        $data['site_name'] = $this->setting['site_name'];
                        $data['meta_keywords'] = $this->setting['meta_keywords'];
                        $data['meta_description'] = $this->setting['meta_description'];  
                        $data['key'] = $this->setting['cal_apikey'];
                        $data['current_version'] = $this->setting['current_version'];  

                        $data['timezone'] = $this->setting['site_timezone']; 

        	       $this->load->view('templates/header', $data);
        	       $this->load->view('pages/'.$page, $data);
        	       $this->load->view('templates/footer', $data);
                }
        }
