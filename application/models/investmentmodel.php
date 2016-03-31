<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InvestmentModel extends CI_Model {

	public function add_email($email) {
		// var_dump($email);
		// die('After Form Submission in Controller');
		$query = "INSERT INTO email_addresses (email) VALUES ('$email')";
		$this->db->query($query);
		return $this->db->insert_id();
		// var_dump($this->db->insert_id());;
		// die('After Speaking with Database Controller');
	}
	// Check email

}