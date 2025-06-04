<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_category2 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('sub_category2_model');
		$this->load->model('category2_model');
		$this->load->model('pages2_model');
	}

	public function index($uuid) {
		$data['sub_category2'] = $this->sub_category2_model->get_sub_categories_by_category($uuid);
		$data['category2'] = $this->category2_model->get_all();
		$data['pages'] = $this->pages2_model->get_all();

		$category = $this->category2_model->get_category_by_uuid($uuid);
		if ($category) {
			$data['category_name'] = $category->category; 
		} else {
			$data['category_name'] = 'Unknown Category'; 
		}

		$data['uuid'] = $uuid; 
		// $data['active_nav'] = 'sub_category2';
		$data['active_nav'] = 'category2';

		$this->load->view('partial/head', $data);
		$this->load->view('sub-category2/sub-category2', $data);
		$this->load->view('partial/footer');
	}
}