<?php
Class Addons_M extends CI_Model {
	private $table='addons';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	
	public function allAddons() {

	$this->db->select('*');
	$query = $this->db->get($this->table);
	$addons = ($query->result());
	return $addons;

	}
	
	public function addons_list() {

	$this->db->select('*');
	$this->db->where('email',$this->session->userdata('email'));
	$this->db->join('addons', 'addons.id = cg_orders.addons_id', 'inner');
	$query = $this->db->get('cg_orders');
	$addons = ($query->result());
	return $addons;

	}
	
	public function plans_list_y() {

	$this->db->select('*');
	$this->db->where('plan_type','y');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function single_addon($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$addons = ($query->row());
	
	return $addons;

	}
	
	
	
	
	
	
	
}
		
	
	