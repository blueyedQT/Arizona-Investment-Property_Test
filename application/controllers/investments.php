<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investments extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->view('templates/header');
	}

	public function index() {
		// $display['title'] = " - Welcome";
		// $this->load->view('templates/header', $display);

		$display['errors'] = $this->session->flashdata('errors');
		$display['message'] = $this->session->flashdata('message');
		$this->load->view('index', $display);
	}

	public function free_report_signup() {
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[email_addresses.email]');
		if($this->form_validation->run() == FALSE) {
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('errors', $this->view_data['errors']);
			redirect('');
		} else {
			$this->load->model('InvestmentModel');
			$post = $this->input->post();
			$model = $post['email'];
			$add_email = $this->InvestmentModel->add_email($model);
			if($add_email == FALSE) {
				$this->session->set_flashdata['errors'] = 'There was a system error, please try again.';
				redirect('');
			}

			// TESTING
			$this->load->library('GetResponse');
			$api = new GetResponse('929e79b37d3acd438f49957aab51521b'); // Testing Account

			$contact = $this->input->post();

			// // Test to make sure connection is working
			// echo $api->ping(); // Output: "pong"

			// Display account information
			// $account = $api->getAccountInfo();
			// var_dump($account);

			// Campaigns
			// $campaigns 	 = (array)$api->getCampaigns();
			// $campaignIDs = array_keys($campaigns);
			// $campaign 	 = $api->getCampaignByID($campaignIDs[0]);
			// var_dump($campaigns, $campaign);

			// Contacts
			// $contacts 	= (array)$api->getContacts(null);
			// var_dump($contacts);
			// die('After Contacts');
			// $contactIDs	= array_keys($contacts);
			// $setName 	= $api->setContactName($contactIDs[0], 'Jimmy');
			// $setCustoms	= $api->setContactCustoms($contactIDs[0], array('title' => 'Mr', 'middle_name' => 'Fred'));
			// $customs 	= $api->getContactCustoms($contactIDs[0]);
			// $contact 	= $api->getContactByID($contactIDs[0]);
			// $geoIP 		= $api->getContactGeoIP($contactIDs[0]);
			// $opens 		= $api->getContactOpens($contactIDs[0]);
			// $clicks 	= $api->getContactClicks($contactIDs[0]);
			$addContact = $api->addContact('pDm5M', $cotact['name'], $contact['email']);

			var_dump($addContact);
			// End Testing

			$message = "Success!";
			$this->session->set_flashdata('message', $message);
			redirect('free_report');
		}
	}

	public function free_report() {
		// if($this->session->flashdata('message') == "Success!") {
			$this->load->view('free_land_scam_report');
		// } else {
		// 	redirect('');
		// }
	}

	///////// Basic Structure, not yet using :)
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

	public function featured() {
		$this->load->view('featured');
	}

	public function contact() {
		$this->load->view('contact');
	}

	public function contact_us() {
		// Want to have it dsplay a success message on the form page
		$this->load->view('thank_you');
	}
}