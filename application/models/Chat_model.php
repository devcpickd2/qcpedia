<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {

    public function get_response($user_message) {
        $user_message = $this->db->escape_like_str($user_message);

        $query = $this->db->query("SELECT * FROM chatbot WHERE messages LIKE '%$user_message%'");

        if($query->num_rows() > 0) {
            $result = $query->row_array();
            return $result['response'];
        } else {
            return "Sorry, I can't understand you.";
        }
    }
    public function insert_chat($data)
    {
        $this->db->insert('chatbot', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
