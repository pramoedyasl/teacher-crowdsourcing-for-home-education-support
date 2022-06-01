<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "Task";

    public $Id_Task;
    public $NamaTask;
    public $NamaPelajaran;
    public $Deskripsi;
    public $KisarHarga;

    public function rules()
    {
        return [
            ['field' => 'NamaTask',
            'label' => 'NamaTask',
            'rules' => 'required'],

            ['field' => 'NamaPelajaran',
            'label' => 'NamaPelajaran',
            'rules' => 'required'],
            
            ['field' => 'Deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']

            ['field' => 'KisarHarga',
            'label' => 'KisarHarga',
            'rules' => 'NUMERIC']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["Id_Task" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->Id_Task = uniqid();
        $this->NamaTask = $post["NamaTask"];
        $this->NamaPelajaran = $post["NamaPelajaran"];
        $this->Deskripsi = $post["Deskripsi"];
        $this->KisarHarga = $post["KisarHarga"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->Id_Task = uniqid();
        $this->NamaTask = $post["NamaTask"];
        $this->NamaPelajaran = $post["NamaPelajaran"];
        $this->Deskripsi = $post["Deskripsi"];
        $this->KisarHarga = $post["KisarHarga"];
        return $this->db->update($this->_table, $this, array('Id_Task' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("Id_Task" => $id));
    }
}