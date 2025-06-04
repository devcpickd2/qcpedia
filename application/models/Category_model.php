<?php 
date_default_timezone_set('Asia/Jakarta');
use Ramsey\Uuid\Uuid;


class Category_model extends CI_Model {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('category_model');
	// 	$this->load->model('pages_model');
	// 	$this->load->library('form_validation');
	// } 

	public function rules()
	{
		return[
			[
				'field' => 'category',
				'label' => 'Category',
				'rules' => 'required'
			]
		];
	}

	public function get_category_by_uuid($uuid) {
        $this->db->where('uuid', $uuid);
        return $this->db->get('category')->row();
    }

	public function insert()
	{
		$uuid = Uuid::uuid4()->toString();

		// $pages = $this->input->post('pages');
		$category = $this->input->post('category');
		$username = $this->session->userdata('username');

		$data = array(
			'uuid' => $uuid,
			'category' => $category,
			'username' => $username,
			// 'pages' => $pages
		);

		$this->db->insert('category', $data);
		return($this->db->affected_rows() > 0) ? true :false;

	}

	public function update($uuid)
	{

		// $pages = $this->input->post('pages');
		$category = $this->input->post('category');
		$username = $this->session->userdata('username');

		$data = array(
			'username' => $username,
			// 'pages' => $pages,
			'category' => $category,

			'modified_at' => date("Y-m-d H:i:s")
		);

		$this->db->update('category', $data, array('uuid' => $uuid));
		return($this->db->affected_rows() > 0) ? true :false;

	}

	// public function get_all()
	// {
	// 	$this->db->order_by('a.created_at', 'DESC');
	// 	$this->db->select('a.*, b.sub_category');
	// 	$this->db->from('category a');
	// 	$this->db->join('sub_category b', 'a.sub_category=b.uuid', 'left');
		
	// 	$data = $this->db->get()->result();

	// 	return $data;
	// }

	public function get_all()
	{
		$data = $this->db->get('category')->result();
		return $data;
	}

	// public function get_all()
	// {

	// 	$this->db->order_by('a.created_at', 'DESC');
	// 	$this->db->select('a.*, b.sub_category, c.pages');
	// 	$this->db->from('category a');
	// 	$this->db->join('sub_category b', 'a.sub_category=b.uuid','left');
	// 	$this->db->join('pages c', 'a.pages=c.uuid','left');
	// 	$data = $this->db->get()->result();

	// 	return $data;
	// }

	public function get_by_uuid($uuid)
	{
		$data = $this->db->get_where('category', array('uuid' => $uuid))->row();
		return $data;
	}
}