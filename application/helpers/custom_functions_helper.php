<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getstatebyid'))
{
    function getstatebyid($id)
    {
		$ci=& get_instance();
        $ci->load->database(); 
        $ci->db->select('*');
		$ci->db->where('id',$id);
		$query = $ci->db->get('states');
		$state = ($query->row()->name);
	
		return $state;
    }   
}