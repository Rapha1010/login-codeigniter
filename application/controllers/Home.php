<?php

Class Home extends CI_Controller{

	function index(){

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}




?>