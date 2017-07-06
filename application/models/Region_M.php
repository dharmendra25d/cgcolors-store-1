<?php
Class Region_M extends CI_Model {

	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	
   public function countriesList() {

	$this->db->select('*');
	$query = $this->db->get('countries');
	$list = ($query->result());
	
	return $list;

	}
	
	public function stateList($cid) {

	$this->db->select('*');
	$this->db->where('country_id',$cid);
    $query = $this->db->get('states');
	$list = ($query->result());

	return $list;

	}
	
	public function plans_list_y() {

	$this->db->select('*');
	$this->db->where('plan_type','y');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function userby_email($email) {

	$this->db->select('*');
	$this->db->where('email',$email);
	$query = $this->db->get($this->table);
	$user = ($query->row());
	
	return $user;

	}
	
	
	
	
	
	
	
}
		
	
	