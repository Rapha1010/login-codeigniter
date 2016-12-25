<?php

class Login extends CI_Controller {

	private $user,$pass;

	public function __construct() {
		parent::__construct();

		$this->user = $this->input->post('user');
		$this->pass = $this->input->post('pass');

	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	 public function logando() {

		$this->load->model('DBlogin');
		$access = $this->DBlogin->autentication($this->user, $this->pass);

		if($access['acesso']) {

			$userdata = array('nome' =>$this->user);

			session_start();
			$_SESSION = $access;
		}

		return $access;
	}

	public function deslogando() {

		session_destroy();
	}
}
