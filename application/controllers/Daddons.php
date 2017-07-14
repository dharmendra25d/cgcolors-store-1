<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daddons extends CI_Controller {

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
		$d['v'] = 'addons';
		$this->load->model('Addons_M');
		$d['list'] = $this->Addons_M->allAddons();
		$this->load->view('template', $d);
	}
	public function addons_list()
	{
	 $this->load->model('Addons_M');
	 $addons=$this->Addons_M->addons_list();
	//redirect('plan-list');
	 $d['list'] = $addons;
	 $d['v'] = 'addons-list';
	$this->load->view('backtemplates', $d);
	}
	
	
	
	public function buynow()
	{
	
					
		$theme_id = $this->input->get('p');
		$this->load->model('Themes_M');
		$theme = $this->Themes_M->single_plan($theme_id);
		$this->session->set_userdata(array(
                            'theme'       => $theme->theme_name,
                            'theme_price'      => $theme->theme_price,
							'theme_id'          =>$theme_id,
						     'status'        => TRUE
                    ));
	
		$d['v'] = 'plans';
		redirect('themes/addons');
	}
	
	public function addons()
	{
		$d['v'] = 'addons';
		$this->load->view('template', $d);
	}
	
	public function add_continue()
	{
		$addons_items = $this->input->post('addons_items');
		$this->session->set_userdata(array(
                            'addons'  => $addons_items
                    ));
		redirect('cart');
	}
	
	
	
}
