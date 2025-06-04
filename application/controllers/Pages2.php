<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('sub_category2_model');
		$this->load->model('category2_model');
		$this->load->model('pages2_model');
		$this->load->library('form_validation');

	}

	public function index($uuid)
	{
		$data = array(
			'pages' => $this->pages2_model->get_by_uuid($uuid),
			'sub_category2' =>$this->sub_category2_model->get_all(),
			'category2' => $this->category2_model->get_all(),
			'active_nav' => 'pages2',
			'active_nav' => 'sub-category2',
			'active_nav' => 'category2'
		);

		$this->load->view('partial/head', $data);
		$this->load->view('pages2/pages2', $data);
		$this->load->view('partial/footer');
	}

}
