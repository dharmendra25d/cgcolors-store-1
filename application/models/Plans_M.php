<?php
Class Plans_M extends CI_Model {
	private $table='plans';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	
	public function plans_list_m() {

	$this->db->select('*');
	$this->db->where('plan_type','m');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function plans_list_y() {

	$this->db->select('*');
	$this->db->where('plan_type','y');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function plans_list() {

	
	$this->db->select('*');
	$this->db->where('user_id',$this->session->userdata('user_id'));
	$this->db->join('plans', 'plans.id = user_plans.plan_id', 'inner');

	$query = $this->db->get('user_plans');
   
	$plans = ($query->result());
	return $plans;
	
	/*(
	$this->db->select('plan_id');
	$this->db->where('email',$this->session->userdata('email'));
	$query = $this->db->get($this->table);
	
	$plans = ($query->row());
	
	$this->db->select('*');
	$this->db->where('id',$plans->plan_id);
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;
	//return $plans; */

	} 
	
	public function check_user_plan() {

	$this->db->select('plan_id');
	$this->db->where('user_id',$this->session->userdata('user_id'));
	$query = $this->db->get('user_plans');
	
	$plans = ($query->row());
	if(!empty($plans->plan_id)) {
	return $plans->plan_id;
	} else {
	return false;
	}
	//return $plans;

	} 
	
	public function single_plan($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$plans = ($query->row());
	
	return $plans;

	}
	
	
	
	
	
	
	
}
		
	
	