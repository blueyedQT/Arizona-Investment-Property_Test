<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investments extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->view('templates/header');
	// }

	public function index() {
		$display['title'] = " - Welcome";
		$this->load->view('templates/header', $display);
		$this->load->view('index');
	}

	public function about() {
		$display['title'] = " - About Us";
		$this->load->view('templates/header', $display);
		$this->load->view('about', $display);
	}

	public function invest() {
		$display['title'] = " - Invest";
		$this->load->view('templates/header', $display);
		$this->load->view('invest');
	}
}