<?php

class Login extends CI_Controller
{
    public function index()
    {
        if (!$this->is_logged_in()) {
        		$data['main_content'] = 'login';
        		$data['message'] = 0;
      			$this->load->view('template', $data);
        } else {
            redirect('home/profile');
        }
    }
    
    public function check_login()
    {           
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[40]|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]|trim|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            redirect('login/login_failed');
            
            
        } else {			   			     
            	$hostname = '{eposta.omu.edu.tr:993/ssl}';
		$username  = $this->input->post('email');
		$password = $this->input->post('password');

		/* try to connect */
		$inbox = imap_open ($hostname, $username, $password);

            if ($inbox) {
			$newdata = array(
				'user_type' => $password,
                    		'email'  => $username,
                    		'logged_in' => TRUE,
			);
            		            //~ $user_id = $this->alumni_model->get_user_id('email');
                                $this->session->set_userdata($newdata);
                                //~ $this->session->set_userdata('user_id', $user_id);
                                
				 redirect('home/profile');
				
                
            } else {
                redirect('login/login_failed');
            }
        }
    }
    
    public function login_failed()
    {
        	$data['main_content'] = 'login';
        	$data['message'] = 1;
      		$this->load->view('template', $data);
    }
    
    public function logout()
    {
        if (!$this->is_logged_in()) {
            redirect('login');
        } else {
            $this->session->set_userdata(array('logged_in' => FALSE));
            $this->session->sess_destroy();
         		$data['main_content'] = 'login';
        		$data['message'] = FALSE;
      			$this->load->view('template', $data);

        }
    }
   


      public function change_failed()
      {
       	$data['main_content'] = 'change_password';
        $data['message'] = 1;
      	$this->load->view('template', $data);
      }
    
    public function is_logged_in()
    {
        return $this->session->userdata('logged_in');
    }
}
