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
}