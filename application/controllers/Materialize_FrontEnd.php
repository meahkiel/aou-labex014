<?php 

class Materialize_FrontEnd extends CI_Controller {

	public function __construct() {

		parent::__construct();

	}

	public function index() {

		$this->load->view("layouts/header");
		
		$this->load->view("main");
		
		$this->load->view("layouts/footer");
	}
}
