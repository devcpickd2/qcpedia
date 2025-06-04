<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category2 extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('category2_model');
		$this->load->model('sub_category2_model');
	}

	public function index() {
		$data['category2'] = $this->category2_model->get_all();
		$data['sub_category2'] = $this->sub_category2_model->get_all();
		$data['active_nav'] = 'category2';
		$data['active_nav'] = 'sub_category2';

		$this->load->view('partial/head', $data);
		$this->load->view('category2/category2', $data);
		$this->load->view('partial/footer');
	}

	public function get_sub_categories() {
		$category = $this->input->post('category');
		$sub_category = $this->Sub_category2_model->get_sub_categories_by_category($uuid);
		echo json_encode($sub_category);
	}

}
