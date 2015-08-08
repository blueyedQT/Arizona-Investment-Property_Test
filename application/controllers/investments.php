<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investments extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->view('templates/header');
	}

	public function index() {
		// $display['title'] = " - Welcome";
		// $this->load->view('templates/header', $display);
		$this->load->view('index');
	}

	public function about() {
		// $display['title'] = " - About Us";
		// $this->load->view('templates/header', $display);
		$this->load->view('about');
	}

	public function invest() {
		// $display['title'] = " - Invest";
		// $this->load->view('templates/header', $display);
		$this->load->view('invest');
	}

	public function contact() {
		$this->load->view('contact');
	}

	public function contact_us() {
		// Want to have it dsplay a success message on the form page
		$this->load->view('thank_you');
	}
}