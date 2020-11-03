<?php

/**
 * 
 * Exercise: 12 
 * This exercise demonstrate the light box with jQuery
 * Example4 page 
 * 
 * */ 
class JQuery_Example extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}
	

	/**
	 * We created the example to view example view. aside from example we
	 * also include the header and footer. The example method accept the example_no parameter
	 * to load into the view this time we load as a default the 
	 */
	public function example($example_no = 4) {
		
		//we load the url helper so that we can use
		//the base_url methods
		$this->load->helper('url');

		
		//we load the part html header 
		$this->load->view("overall/header");
		
		//this will be the body
		$this->load->view("example" . $example_no);

		//this loads the footer 
		$this->load->view("overall/footer");

	}
}
