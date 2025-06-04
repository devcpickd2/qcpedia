<?php 
date_default_timezone_set('Asia/Jakarta');
use Ramsey\Uuid\Uuid;

class Pages_model extends CI_Model {

    public function rules()
    {
        return [
            [
                'field' => 'sub_category',
                'label' => 'Sub Category',
                'rules' => 'required'
            ],
            [
                'field' => 'pages',
                'label' => 'Pages',
                'rules' => 'required'
            ]
        ];
    }

    public function insert()
    {
        $uuid = Uuid::uuid4()->toString();
        $data = [
            'uuid' => $uuid,
            'username' => $this->session->userdata('username'),
            'pages' => $this->input->post('pages'),
            'sub_category' => $this->input->post('sub_category'),
            'created_at' => date("Y-m-d H:i:s"),
        ];

        $this->db->insert('pages', $data);
        return $this->db->affected_rows() > 0;
    }

    public function update($uuid)
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'pages' => $this->input->post('pages'),
            'sub_category' => $this->input->post('sub_category'),
            'modified_at' => date("Y-m-d H:i:s")
        ];

        $this->db->update('pages', $data, ['uuid' => $uuid]);
        return $this->db->affected_rows() > 0;
    }


    public function new_update($uuid)
    {
        $content = $this->input->post('content');

        $data = [
            'username' => $this->session->userdata('username'),
            'content' => $content,
            'modified_at' => date("Y-m-d H:i:s")
        ];

        $this->db->where('uuid', $uuid);
        $this->db->update('pages', $data);
        return $this->db->affected_rows() > 0;
    }

    public function get_all()
    {
        $this->db->select('a.*, b.sub_category');
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
