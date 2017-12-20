<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function _head()
	{
		$this->load->view('head');
	}

	function _sidebar()
	{
		$topics = $this->topic_model->gets();
		$this->load->view('topic_list', array('topics'=>$topics));
	}

	function _footer()
	{
		$this->load->view('footer');
	}
}
