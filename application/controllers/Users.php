<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        class Users extends MY_Controller {


            public function __construct()
            {
                parent::__construct();
        
                // Force SSL
                //$this->force_ssl();
        
                // Form and URL helpers always loaded (just for convenience)
                $this->load->helper('url');
                $this->load->helper('form');
            }

            //Login
            public function login()
            {
                // Method should not be directly accessible
                if( $this->uri->uri_string() == 'users/login')
                {
                    show_404();
                }
            
                if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
                {
                    $this->require_min_level(1);
                }
            
                $this->setup_login_form();
            
                $html .= $this->load->view('templates/header/header', '', TRUE);
                $html .= $this->load->view('examples/login_form', '', TRUE);
                $html .= $this->load->view('templates/footer/footer', '', TRUE);
            
                echo $html;
            }

            //Logout
            public function logout()
            {
                $this->authentication->logout();
        
                // Set redirect protocol
                $redirect_protocol = USE_SSL ? 'https' : NULL;
        
                redirect( site_url( LOGIN_PAGE . '?logout=1', $redirect_protocol ) );
            }

            //Future Create User Section


            //Future Recover Account Section
        }
    