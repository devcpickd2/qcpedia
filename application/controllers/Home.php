<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('auth_model');
		// $this->load->model('kotak_saran_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		} 

	}

	public function index()
	{
		$pegawai = $this->auth_model->current_user();

		$data = array(
			'nama_pegawai' => ($pegawai) ? $pegawai->nama : "Tamu",
			'active_nav' => 'home'
		);
 
		$this->load->view('partials/head', $data);
		$this->load->view('home/home', $data);
		$this->load->view('partials/footer');
	}
}
