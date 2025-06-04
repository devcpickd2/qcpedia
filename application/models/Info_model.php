<?php 
date_default_timezone_set('Asia/Jakarta');
use Ramsey\Uuid\Uuid;


class Info_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('auth_model');
	}
	
	public function rules()
	{
		return[
			[
				'field' => 'messages',
				'label' => 'Keyword',
				'rules' => 'required'
			],
			[
				'field' => 'response',
				'label' => 'Information',
				'rules' => 'required'
			]
		];
	}


	public function insert()
	{
		// $uuid = Uuid::uuid4()->toString();

		$messages = $this->input->post('messages');
		$response = $this->input->post('response');

		$data = array(
			'messages' => $messages,
			'response' => $response
		);

		$this->db->insert('chatbot', $data);
		return($this->db->affected_rows() > 0) ? true :false;

	}

	public function update($id)
	{ 

		$messages = $this->input->post('messages');
		$response = $this->input->post('response');

		$data = array(
			'messages' => $messages,
			'response' => $response
		);

		$this->db->update('chatbot', $data, array('id' => $id));
		return($this->db->affected_rows() > 0) ? true :false;

	}

	public function get_all()
	{
		$data = $this->db->get('chatbot')->result();
		return $data;
	}

	public function get_by_uuid($id)
	{
		$data = $this->db->get_where('chatbot', array('id' => $id))->row();
		return $data;
	}
}