<?php 
date_default_timezone_set('Asia/Jakarta');
use Ramsey\Uuid\Uuid;

class Pages2_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('a.*, b.sub_category, b.uuid as sub_category');
        $this->db->from('pages a');
        $this->db->join('sub_category b', 'a.sub_category = b.uuid', 'left');
        $this->db->order_by('a.created_at', 'DESC');

        return $this->db->get()->result();
    }

    public function get_by_uuid($uuid)
    {
        return $this->db->get_where('pages', ['uuid' => $uuid])->row();
    }
}