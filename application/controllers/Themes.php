<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends CI_Controller {

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
		$d['v'] = 'themes';
		$this->load->view('template', $d);
	}
	
	
	
	public function buynow()
	{
		$tplan_name = $this->input->get('p');
		$tplan_price = $this->input->get('pr');
		$this->session->set_userdata(array(
                            'theme'  => $tplan_name,
                            'theme_price' => $tplan_price,
						     'status'  => TRUE
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
