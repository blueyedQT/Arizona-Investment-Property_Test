<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InvestmentModel extends CI_Model {

	public function add_email($email) {
		$query = "INSERT INTO email_addresses (email) VALUES ('$email')";
		$this->db->query($query);
		return $this->db->insert_id();
	}
	// Check email

}