<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investments extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->view('templates/header');
	}

	public function index() {
		$this->load->view('index');
	}

	public function about() {
		$this->load->view('about');
	}

	public function invest() {
		$this->load->view('invest');
	}
}