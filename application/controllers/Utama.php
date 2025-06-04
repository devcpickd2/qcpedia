<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Utama extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category2_model');
		$this->load->model('sub_category2_model');
		$this->load->model('pages2_model');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data = array(
			'category2' => $this->category2_model->get_all(),
			'active_nav' => 'category2', 
			'active_nav' => 'utama', 
		);

		$this->load->view('partial/head', $data);
		$this->load->view('utama/utama', $data);
		$this->load->view('partial/footer');
	}

}