<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Task_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["Task"] = $this->Task_model->getAll();
        $this->load->view("admin/Task/list", $data);//liat dmna km nyimoennya 
    }

    public function add()
    {
        $Task = $this->Task_model;
        $validation = $this->form_validation;
        $validation->set_rules($Task->rules());

        if ($validation->run()) {
            $Task->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");//liat dmn km nyimpennya 
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/Task');
       
        $Task = $this->Task_model;
        $validation = $this->form_validation;
        $validation->set_rules($Task->rules());

        if ($validation->run()) {
            $Task->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["Task"] = $Task->getById($id);
        if (!$data["Task"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);//nyimpennya dmna 
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Task_model->delete($id)) {
            redirect(site_url('admin/Task'));
        }
    }
}