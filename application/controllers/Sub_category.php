<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('category_model');
		$this->load->model('sub_category_model');
		$this->load->model('pages_model');
		$this->load->library('form_validation');

		if(!$this->auth_model->current_user()){
			redirect('login');
		}
	}

	public function index()
	{
		$data = array(
			'category' => $this->category_model->get_all(),
			'sub_category' => $this->sub_category_model->get_all(),
			'active_nav' => 'sub-category', 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('sub-category/sub-category');
		$this->load->view('partials/footer');
	}


	public function tambah()
	{
		$rules = $this->sub_category_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$insert = $this->sub_category_model->insert();

			if ($insert) {
				$this->session->set_flashdata('success_msg', 'Data Sub Category berhasil di simpan');
				redirect('sub-category');
			}else {
				$this->session->set_flashdata('error_msg', 'Data Sub Category gagal di simpan');
				redirect('sub-category');
			}
		}

		$data = array(
			'category' => $this->category_model->get_all(),
			'sub_category' => $this->sub_category_model->get_all(),
			'active_nav' => 'sub-category', 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('sub-category/sub-category-tambah', $data);
		$this->load->view('partials/footer');
	}

	public function edit($uuid)
	{
		$rules = $this->sub_category_model->rules();
		$this->form_validation->set_rules($rules);

		$data = $this->sub_category_model->get_by_uuid($uuid);

		if ($this->form_validation->run() == TRUE) {
			$update = $this->sub_category_model->update($uuid);

			if ($update) {
				$this->session->set_flashdata('success_msg', 'Data Pegawai berhasil di update');
				redirect('sub-category');
			}else {
				$this->session->set_flashdata('error_msg', 'Data Pegawai gagal di update');
				redirect('sub-category');
			}
		}

		$data = array(
			'sub_category' => $this->sub_category_model->get_by_uuid($uuid),
			'category' => $this->category_model->get_all(),
			'active_nav' => 'sub-category' 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('sub-category/sub-category-edit', $data);
		$this->load->view('partials/footer');
	}

	public function get_subcategories() {
		$this->load->model('sub_category_model');
		$uuid = $this->input->post('uuid');
		$sub_category = $this->sub_category_model->get_subcategories_by_category($uuid);
		foreach ($sub_category as $sub_category) {
            echo '<p>' . $sub_category->sub_category . '</p>'; // Sesuaikan dengan kolom sub_category
        }
    }
    public function get_sub_category() {
    	$uuid = $this->input->get('uuid');
    	$data['sub_category'] = $this->sub_category_model->get_by_category_uuid($uuid);

        $this->load->view('sub_category_list', $data); // View yang menampilkan subkategori
    }
}
