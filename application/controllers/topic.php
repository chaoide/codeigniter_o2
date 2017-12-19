<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$this->load->view('main');
		$this->load->view('footer');
	}

	public function get($id)
	{
		$this->load->view('head');
		$this->load->view('get', array('id'=>$id));
		$this->load->view('footer');
	}
}
