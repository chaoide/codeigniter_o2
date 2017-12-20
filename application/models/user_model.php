<?php
class User_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function add($option) {
		$this->db->set('email', $option['email']);
		$this->db->set('password', $option['password']);
		$this->db->set('created', 'NOW()', false);
		$this->db->insert('user');
		return $this->db->insert_id();
	}

	function getByEmail($option) {
		return $this->db->get_where('user', array('email'=>$option['email']))->row();
	}
}
