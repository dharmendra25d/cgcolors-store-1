<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends CI_Controller {

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
		$d['v'] = 'plans';
		$this->load->model('Plans_M');
		$d['plans_m']=$this->Plans_M->plans_list_m();
		$d['plans_y']=$this->Plans_M->plans_list_y();
		$this->load->view('template', $d);
	}
	
	public function plans_list()
	{
	 $this->load->model('Plans_M');
	 $plans=$this->Plans_M->plans_list();
	//redirect('plan-list');
	 $d['list'] = $plans;
	 $d['v'] = 'plans-list';
	$this->load->view('backtemplates', $d);
	}
	public function buynow()
	{
		$plan_id = $this->input->get('p');
		$this->load->model('Plans_M');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->get());
		$plans = $this->Plans_M->single_plan($plan_id);
		if($plans->plan_price=='Free') {
		 $plans->plan_price=0;
		}
		$this->session->set_userdata(array(
                            'plan_name'       => $plans->plan_name,
                            'plan_price'      => $plans->plan_price,
							'plan_id'          =>$plan_id,
							'total'				=>$plans->plan_price,
						     'status'        => TRUE
                    ));
				
		$d['v'] = 'plans';
		redirect('cart');
	}
}
