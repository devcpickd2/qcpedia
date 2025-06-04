<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('auth_model');
		$this->load->model('info_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}
	}

	public function index()
	{
		$data = array(
			'info' => $this->info_model->get_all(),
			'active_nav' => 'info', 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('info/info', $data);
		$this->load->view('partials/footer');
	}

	public function tambah()
	{

		$rules = $this->info_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$insert = $this->info_model->insert();
			if ($insert) {
				$this->session->set_flashdata('success_msg', 'Informasi berhasil di simpan');
				redirect('info');
			}else {
				$this->session->set_flashdata('error_msg', 'Informasi gagal di simpan');
				redirect('info');
			}
		}

		$data = array(
			'active_nav' => 'info');

		$this->load->view('partials/head', $data);
		$this->load->view('info/info-tambah');
		$this->load->view('partials/footer');
	}


	public function edit($id)
	{
		$rules = $this->info_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$update = $this->info_model->update($id);
			if ($update) {
				$this->session->set_flashdata('success_msg', 'Informasi berhasil di Update');
				redirect('info');
			}else {
				$this->session->set_flashdata('error_msg', 'Informasi gagal di Update');
				redirect('info');
			}
		}

		$data = array('info' => $this->info_model->get_by_uuid($id),
			'active_nav' => 'info');

		$this->load->view('partials/head', $data);
		$this->load->view('info/info-edit', $data);
		$this->load->view('partials/footer');
	}
}
