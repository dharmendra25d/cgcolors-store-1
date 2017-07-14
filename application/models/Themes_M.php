<?php
Class Themes_M extends CI_Model {
	private $table='themes';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	
	public function allThemes() {

	$this->db->select('*');
	$query = $this->db->get($this->table);
	$themes = ($query->result());
	
	return $themes;

	}
	
	public function themes_list() {

	$this->db->select('*');
	$this->db->where('email',$this->session->userdata('email'));
	$this->db->join('themes', 'themes.id = cg_orders.theme_id', 'inner');

	$query = $this->db->get('cg_orders');

	
	$theme = ($query->result());
	
	return $theme;

	}
	
	public function plans_list_y() {

	$this->db->select('*');
	$this->db->where('plan_type','y');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function single_plan($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$theme = ($query->row());
	
	return $theme;

	}
	
	
	
	
	
	
	
}
		
	
	