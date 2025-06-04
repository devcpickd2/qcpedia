<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// $this->load->model('auth_model');
		$this->load->model('category2_model');

	}

	public function index()
	{
		$data['category2'] = $this->category2_model->get_all();
		$data['active_nav'] = 'contact';

		$this->load->view('partial/head', $data);
		$this->load->view('contact/contact', $data);
		$this->load->view('partial/footer');
	}
}
