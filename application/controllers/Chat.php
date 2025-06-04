<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Chat extends CI_Controller {

	public function index()
	{
		$this->load->view('utama/chat');
	}
    public function get_reply() {
        // Get user message from AJAX request
        $user_message = $this->input->post('messageValue');

        // Load Chat_model
        $this->load->model('Chat_model');

        // Get response from model
        $response = $this->Chat_model->get_response($user_message);

        // Return response
        echo $response;
    }
}