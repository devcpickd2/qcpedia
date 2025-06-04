	<?php 
	date_default_timezone_set('Asia/Jakarta');
	use Ramsey\Uuid\Uuid;


	class Sub_category_model extends CI_Model {

		public function rules()
		{
			return[
				[
					'field' => 'category',
					'label' => 'Category',
					'rules' => 'required'
				],
				[
					'field' => 'sub_category',
					'label' => 'Sub Category',
					'rules' => 'required'
				]
			];
		}

		public function insert()
		{
			$uuid = Uuid::uuid4()->toString();

			$category = $this->input->post('category');
			$sub_category = $this->input->post('sub_category');
			$username = $this->session->userdata('username');

			$data = array(
				'uuid' => $uuid,
				'username' => $username,
				'category' => $category,
				'sub_category' => $sub_category
			);

			$this->db->insert('sub_category', $data);
			return($this->db->affected_rows() > 0) ? true :false;

		}

		public function update($uuid)
		{
			$category = $this->input->post('category');
			$sub_category = $this->input->post('sub_category');
			$username = $this->session->userdata('username');

			$data = array(
				'username' => $username,
				'category' => $category,
				'sub_category' => $sub_category,

				'modified_at' => date("Y-m-d H:i:s")
			);

			$this->db->update('sub_category', $data, array('uuid' => $uuid));
			return($this->db->affected_rows() > 0) ? true :false;

		}

		// public function get_all()
		// {
		// 	$data = $this->db->get('sub_category')->result();
		// 	return $data;
		// }

		public function get_all()
		{
			$this->db->order_by('a.created_at', 'DESC');
			$this->db->select('a.*, b.category');
			$this->db->from('sub_category a');
			$this->db->join('category b', 'a.category=b.uuid', 'left');

			$data = $this->db->get()->result();

			return $data;
		}

		public function get_by_uuid($uuid)
		{
			$data = $this->db->get_where('sub_category', array('uuid' => $uuid))->row();
			return $data;
		}

		public function get_subcategories_by_category($uuid) {
			$this->db->where('category', $uuid);
			$query = $this->db->get('sub_category');
			return $query->result();
		}

		public function get_by_category_uuid($uuid) {
			$this->db->where('category', $uuid);
			$query = $this->db->get('sub_category');
			return $query->result();
		}
	}