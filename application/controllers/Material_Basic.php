<?php 


/**
 * 
 * Week 11 Exercise 013 demonstrate the 
 * Materialize CSS created by team of students from Carneige Melon University
 * We use Materilize CSS to create Header body and footer using grid row
 */

class Material_Basic extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}

	/**
	 * 
	 * @TODO: Display the Admin Dashboard using materialize.css
	 */
	public function index() {
		//create data for the table list
		$data = array(
			"persons" => array(
				array("id" => "1", "firstname" => "Hadji", "lastname" => "Tejuco"),
				array("id" => "2", "firstname" => "Leon Dustin", "lastname" => "Layugan"),
				array("id" => "3", "firstname" => "Abe", "lastname" => "Olandres"),
			)
		);

		//we load the header 
		$this->load->view("materialcss_header");
		//we load the main
		$this->load->view("materialcss_basic",$data);
		//we load the footer where we insert the script
		$this->load->view("materialcss_footer");

		
	}
}
