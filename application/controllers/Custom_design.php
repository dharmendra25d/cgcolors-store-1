<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_design extends CI_Controller {

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
		 $this->load->library('user_agent');  // load user agent library

    //Set session for the referrer url
    $this->session->set_userdata('referrer_url', $this->agent->referrer() );  
		if(!empty($this->session->userdata('user_id'))) {
       	$d['v'] = 'custom-design';
		
		$this->load->view('template', $d);
		} else {
			
			redirect('login');
		}
	}
	
	public function add()
	{
		
		$this->load->model('Common_M');
		$this->load->model('Customer_M');
		$this->load->library('form_validation');
				$this->form_validation->set_rules('question1','', 'required');
                $this->form_validation->set_rules('question2', 'required');
                    
                $this->form_validation->set_rules('question3', 'required');
                $this->form_validation->set_rules('question4', 'required');
				$this->form_validation->set_rules('question5', 'required');
				//$this->form_validation->set_message('question5', '%s: the minimum of characters is %s');

                if ($this->form_validation->run() == FALSE)
                {
                       $this->session->set_flashdata('question_error', 'Please fill all fields');
					   $d = $this->input->post();
					   $this->Customer_M->temp_data($d);
					   $d['v']='custom-design';
					   
					  $this->load->view('template', $d);
                }
                else
                {
                       	$d = $this->input->post();
						$userid = $this->Common_M->add_queries($d);
						$this->session->set_flashdata('question_success', 'Thanks,We will get back you soon');

						redirect('custom_design');	
						
							
                }
       
	}
}
