<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('sub_category_model');
		$this->load->model('category_model');
		$this->load->model('pages_model');
		$this->load->library('form_validation');
		$this->load->library('upload');

		if(!$this->auth_model->current_user()){
			redirect('login');
		}
	}

	public function index()
	{

		$data = array(
			'pages' => $this->pages_model->get_all(),
			'sub_category' => $this->sub_category_model->get_all(),
			'active_nav' => 'pages', 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('pages/pages', $data);
		$this->load->view('partials/footer');
	}

	public function detail($uuid)
	{

		$data = array(
			'pages' => $this->pages_model->get_by_uuid($uuid),
			'active_nav' => 'pages', 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('pages/pages-detail', $data);
		$this->load->view('partials/footer');
	}

	public function tambah()
	{

		$rules = $this->pages_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$insert = $this->pages_model->insert();
			if ($insert) {
				$this->session->set_flashdata('success_msg', 'Data Pages berhasil di tambahkan');
				redirect('pages');
			}else {
				$this->session->set_flashdata('error_msg', 'Data Departemen gagal di tambahkan');
				redirect('pages');
			}
		}

		$data = array(
			'pages' => $this->pages_model->get_all(),
			'sub_category' => $this->sub_category_model->get_all(),
			'active_nav' => 'pages',
		);

		$this->load->view('partials/head', $data);
		$this->load->view('pages/pages-tambah');
		$this->load->view('partials/footer');
	}

	public function edit($uuid)
	{
		$rules = $this->pages_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$update = $this->pages_model->update($uuid);
			if ($update) { 
				$this->session->set_flashdata('success_msg', 'Pages berhasil di Update');
				redirect('pages');
			}else {
				$this->session->set_flashdata('error_msg', 'Pages gagal di Update');
				redirect('pages');
			}
		}

		$data = array(
			'pages' => $this->pages_model->get_by_uuid($uuid),
			'sub_category' => $this->sub_category_model->get_all(),
			'active_nav' => 'pages',
		);

		$this->load->view('partials/head', $data);
		$this->load->view('pages/pages-edit', $data);
		$this->load->view('partials/footer');
	}

	public function new($uuid)
	{
		$rules = [
			[
				'field' => 'content',
				'label' => 'Content',
				'rules' => 'required'
			]
		];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === TRUE) {
			$update = $this->pages_model->new_update($uuid);
			if ($update) {
				$this->session->set_flashdata('success_msg', 'Page successfully updated');
				redirect('pages');
			} else {
				$this->session->set_flashdata('error_msg', 'Page update failed');
				redirect('pages');
			}
		}

		$data = [
			'pages' => $this->pages_model->get_by_uuid($uuid),
			'active_nav' => 'pages'
		];

		$this->load->view('partials/head', $data);
		$this->load->view('pages/pages-new', $data);
		$this->load->view('partials/footer');
	}

	public function upload_image()
	{
		if (isset($_FILES['upload']['name'])) {
			log_message('error', 'Upload request detected');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = time();
			$config['overwrite'] = true;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('upload')) {
				$data = $this->upload->data();
				$url = base_url('assets/uploads/' . $data['file_name']);

				log_message('error', 'Upload success: ' . $url);

				echo json_encode([
					'uploaded' => 1,
					'fileName' => $data['file_name'],
					'url' => $url
				]);
			} else {
				log_message('error', 'Upload failed: ' . $this->upload->display_errors());

				echo json_encode([
					'uploaded' => 0,
					'error' => ['message' => strip_tags($this->upload->display_errors())]
				]);
			}
		} else {
			log_message('error', 'No file upload detected');
		}
	}

}
