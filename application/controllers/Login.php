<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
       	$d['v'] = 'login';
		 $this->load->library('user_agent');  // load user agent library

    //Set session for the referrer url
    $this->session->set_userdata('referrer_url', $this->agent->referrer() );  
		$this->load->view('template', $d);
	}
	
	public function auth()
	{
	$this->load->model('Customer_M');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email', 'Email', 'trim|required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	if ($this->form_validation->run() == FALSE) {
			$d['v'] = 'login';
			$this->load->view('template', $d);
	} else {
	 if($this->Customer_M->vauth($this->input->post())) {
		$user = $this->Customer_M->userby_email($this->input->post('email')); 
	 $this->session->set_userdata(array('user_id'=>$user->id,'name'=> $user->fname,'email'=>$this->input->post('email')));
	 if( $this->session->userdata('referrer_url') ) {
    //Store in a variable so that can unset the session
    $redirect_back = $this->session->userdata('referrer_url');
    $this->session->unset_userdata('referrer_url');
    redirect( $redirect_back );
}

else {
	 redirect('dashboard/plans');
}
		
	 } else {
		 $this->session->set_flashdata('login_error', 'Sorry Email/Password is incorrect');

	 	$d['v'] = 'login';
		
		$this->load->view('template', $d);
	 }
							
     }
      
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	
	}
		
	
		//$this->load->view('template', $d);

}
