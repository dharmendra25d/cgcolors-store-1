<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

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
		 if(!empty($this->session->userdata('theme')) || !empty($this->session->userdata('addons'))) {
		$this->session->unset_userdata('plan_name');
		$this->session->unset_userdata('plan_price');
		$this->session->unset_userdata('plan_id');
		 }
		 
		$d['v'] = 'cart';
		$this->load->view('template', $d);
	}
	
	public function buynow()
	{
		$tplan_name = $this->input->get('p');
		$tplan_price = $this->input->get('pr');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->get());
		$this->session->set_userdata(array(
                            'theme'  => $tplan_name,
                            'theme_price' => $tplan_price,
						     'status'  => TRUE
                    ));
		$d['v'] = 'plans';
		redirect('themes');
	}
	
	public function remove_plan()
	{
		$tplan_name = $this->input->post('plan');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$this->session->unset_userdata('plan_name');
		return true;
	}
	
	public function remove_addons()
	{
		$tplan_name = $this->input->post('plan');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$addons=$this->session->userdata('addons');
		unset($addons[$tplan_name]);
		$this->session->set_userdata('addons',$addons);
		return true;
	}
	
	public function remove_theme()
	{
		$tplan_name = $this->input->post('plan');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$this->session->unset_userdata('theme');
		return true;
	}
}
