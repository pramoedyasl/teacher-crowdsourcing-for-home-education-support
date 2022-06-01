<?php
defined('BASEPATH') or exit('No direct script access allowed');

class index extends CI_Controller
{
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("","refresh");
    }

    public function index()
	{
		$this->load->view('index');
	}
    
}
