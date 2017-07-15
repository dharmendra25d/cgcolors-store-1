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
		$this->load->model('Themes_M');
		$d['list'] = $this->Themes_M->allThemes();
		$this->load->view('template', $d);
	}
	
	
		public function themes_list()
	{
	 $this->load->model('Themes_M');
	 $themes=$this->Themes_M->themes_list();
	//redirect('plan-list');
	 $d['list'] = $themes;
	 $d['v'] = 'themes-list';
	$this->load->view('backtemplates', $d);
	}
	
	
	public function buynow() {
	    $theme_id = $this->input->get('p');
		$this->load->model('Themes_M');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->get());
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
		$this->load->model('Addons_M');
		$d['list'] = $this->Addons_M->allAddons();
		$this->load->view('template', $d);
	}
	
	public function add_continue()
	{
		$addons_items = $this->input->post('addons_items');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$this->load->model('Addons_M');
		
		$addons_id="";
		if(!empty($addons_items)) {
		foreach($addons_items as $addon) {
			$addons_id .= $addon.",";
			$list = $this->Addons_M->single_addon($addon);
			
			$addons_item[]= $list;
			
		}
		
		$this->session->set_userdata(array(
                            'addons'  => $addons_item,
							'addons_id' =>$addons_id 
                    ));
		}
		redirect('cart');
	}
	
	
	
}
