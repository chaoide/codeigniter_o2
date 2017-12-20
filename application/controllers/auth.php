<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_controller {

	function __construct() {
		parent::__construct();
	}

	public function login() {
		$this->_head();

		$this->load->view('login');

		$this->_footer();
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('/');
	}

	function authentication() {
		$authentication = $this->config->item('authentication');
		if($this->input->post('id') == $authentication['id'] && $this->input->post('password') == $authentication['password']) {
			$this->session->set_userdata('is_login', true);
			$this->load->helper('url');
			redirect('/topic/add');
		} else {
			echo "불일치";
			$this->session->set_flashdata('message', '로그인에 실패 했습니다.');
			$this->load->helper('url');
			redirect('/auth/login');
		}
	}
}
