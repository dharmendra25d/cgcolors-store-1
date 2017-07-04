<?php
Class Customer_M extends CI_Model {
	private $table='dg_users';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	public function add($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	unset($info['c_password']);
	unset($info['submit']);

	$this->db->insert($this->table,$info);
		
	return true;

	}
	
	public function vauth($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	$this->db->where('email',$info['email']);
	$this->db->where('password',$info['password']);
    $query = $this->db->get('dg_users');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
		

	}
	
	
	function mail_exists($key)
{
    $this->db->where('email',$key);
    $query = $this->db->get('dg_users');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
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
	
	public function single_plan($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$plans = ($query->row());
	
	return $plans;

	}
	
	
	
	
	
	
	
}
		
	
	