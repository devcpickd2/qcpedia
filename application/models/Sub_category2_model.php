	<?php 
	date_default_timezone_set('Asia/Jakarta');
	use Ramsey\Uuid\Uuid;

	class Sub_category2_model extends CI_Model {

		public function get_sub_categories_by_category($uuid) {
			$this->db->where('category', $uuid);
			$query = $this->db->get('sub_category');
			return $query->result();
		}

		// public function get_sub_categories_by_category($uuid) {
		// 	$this->db->select('a.*, b.category AS category');
		// 	$this->db->from('sub_category a');
		// 	$this->db->join('category b', 'a.category = b.uuid', 'left');

		// 	if ($uuid !== null) {
		// 		$this->db->where('a.category', $uuid);
		// 	}

		// 	$this->db->order_by('a.created_at', 'DESC');

		// 	$query = $this->db->get();
		// 	return $query->result();
		// }

		public function get_all() {
			$this->db->select('a.*, b.category AS category'); 
			$this->db->from('sub_category a');
			$this->db->join('category b', 'a.category = b.uuid', 'left'); 
			$this->db->order_by('a.created_at', 'DESC');
			$data = $this->db->get()->result();
			return $data;
		}
	}


