<?php
Class Common_M extends CI_Model {
	
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }
	public function get_themes($id) {
		$this->db->select('*');
		//$this->db->from($this->table);
		//if($id!='') {
		$query = $this->db->get_where($this->table_emp, array("business_id"=>$id));
		//} else {
		//	$query = $this->db->get($this->table_emp);
		//}
		$val = count($query->result());
		if($val>=1) {
			return $query->result();
		} else {
			return false;
		}

	}
	
	public function add_queries($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	unset($info['submit']);

	$this->db->insert('custom_design_queries',$info);
	 $insert_id = $this->db->insert_id();
	
	return $insert_id;

	}
	
}