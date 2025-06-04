<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('sub_category_model');
		$this->load->model('pages_model');
		$this->load->model('category_model');
		$this->load->library('form_validation');
		

		if(!$this->auth_model->current_user()){
			redirect('login');
		}
	}

	public function index()
	{

		$data = array(
			'pages' => $this->pages_model->get_all(),
			'category' => $this->category_model->get_all(),
			'active_nav' => 'category', 
		);

		$this->load->view('partials/head', $data);
		$this->load->view('category/category', $data);
		$this->load->view('partials/footer');
	}

	public function tambah()
	{

		$rules = $this->category_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$insert = $this->category_model->insert();
			if ($insert) {
				$this->session->set_flashdata('success_msg', 'Data Category berhasil di tambahkan');
				redirect('category');
			}else {
				$this->session->set_flashdata('error_msg', 'Data Category gagal di tambahkan');
				redirect('category');
			}
		}

		$data = array(
			'pages' => $this->pages_model->get_all(),
			'active_nav' => 'category',
		);

		$this->load->view('partials/head', $data);
		$this->load->view('category/category-tambah', $data);
		$this->load->view('partials/footer');
	}


	public function edit($uuid)
	{
		$rules = $this->category_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			
			$update = $this->category_model->update($uuid);
			if ($update) {
				$this->session->set_flashdata('success_msg', 'Category berhasil di Update');
				redirect('category');
			}else {
				$this->session->set_flashdata('error_msg', 'Category gagal di Update');
				redirect('category');
			}
		}

		$data = array(
			'pages' => $this->pages_model->get_all(),
			'category' => $this->category_model->get_by_uuid($uuid),
			'active_nav' => 'category',
		);

		$this->load->view('partials/head', $data);
		$this->load->view('category/category-edit', $data);
		$this->load->view('partials/footer');
	}

	public function get_subcategories() {
        $category = $this->input->post('category');  // Ambil ID kategori yang dikirimkan
        if ($category) {
            // Panggil model untuk mendapatkan subkategori yang sesuai
        	$this->load->model('sub_category_model');
        	$sub_category = $this->sub_category_model->get_subcategories_by_category($category);

            // Buat output untuk ditampilkan di halaman
        	$output = '<ul>';
        	foreach ($sub_category as $sub_category) {
        		$output .= '<li>' . $sub_category->subcategory_name . '</li>';
        	}
        	$output .= '</ul>';

            // Kirim hasil ke AJAX
        	echo $output;
        }
    }
}
