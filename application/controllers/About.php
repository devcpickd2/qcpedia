<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// $this->load->model('auth_model');
		$this->load->model('category2_model');

	}

	public function index()
	{
		$data['category2'] = $this->category2_model->get_all();
		$data['active_nav'] = 'about';

		$this->load->view('partial/head', $data);
		$this->load->view('about/about', $data);
		$this->load->view('partial/footer');
	}
}
