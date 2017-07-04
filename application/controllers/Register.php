<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
       	$d['v'] = 'register';
		
		$this->load->view('template', $d);
	}
	
	public function add()
	{
		 $this->load->library('form_validation');
				$this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('password', 'Password', 'min_length[8]|max_length[15]|required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('c_password', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_rolekey_exists');
				$this->form_validation->set_message('min_length', '%s: the minimum of characters is %s');
				$this->form_validation->set_message('max_length', '%s: the maximum of characters is %s');

                if ($this->form_validation->run() == FALSE)
                {
                       $d['v']='register';
					   $this->load->view('template', $d);
                }
                else
                {
                       	$d = $this->input->post();
						$this->load->model('Customer_M');
						$this->Customer_M->add($d);
						redirect('login');	
							
                }
      
		
	
		//$this->load->view('template', $d);
	}
	
	function rolekey_exists($key) {
			$this->load->model('Customer_M');
    $this->Customer_M->mail_exists($key);
    if ($this->Customer_M->mail_exists($key))
                {
                   $this->form_validation->set_message('rolekey_exists', 'Email already exists');
                        return FALSE;   
                }
                else
                { 
			
                      return TRUE;   
                }
}
}
