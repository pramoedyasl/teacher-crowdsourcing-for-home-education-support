<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('TheModel');
    }

    public function index()
    {
        $this->load->view('About');
    }
}
