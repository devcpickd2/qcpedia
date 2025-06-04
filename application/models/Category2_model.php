<?php 
date_default_timezone_set('Asia/Jakarta');
use Ramsey\Uuid\Uuid;


class Category2_model extends CI_Model {

	public function get_all() {
		$this->db->order_by('category', 'ASC');
		$query = $this->db->get('category');
		return $query->result();
	}
	public function get_category_by_uuid($uuid) {
		$this->db->where('uuid', $uuid);
		$query = $this->db->get('category');
		return $query->row();
	}
}