<?php
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('CobaTambah2/m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['task'] = $this->m_data->tampil_data()->result();
		$this->load->view('task',$data);
	}
 
	function tambah(){
		$this->load->view('CobaTambah/cobatambah');
	}
 
	function tambah_aksi(){
		$NamaTask 		= $this->input->post('NamaTask');
		$NamaPelajaran 	= $this->input->post('NamaPelajaran');
		$Deskripsi 		= $this->input->post('Deskripsi');
		$KisarHarga		= $this->input->post('KisarHarga');

		$data	= array(
			'NamaTask' 		=> $NamaTask,
			'NamaPelajaran' => $NamaPelajaran,
			'Deskripsi' 	=> $Deskripsi,
			'KisarHarga' 	=> $KisarHarga
		);
		$this->m_data->input_data($data, 'task');
		redirect('COBAAAA/Crud/index');
	}
	
	function edit($Id_Task){
		$where = array('Id_Task' => $Id_Task);
		$data['task'] = $this->m_data->edit_data($where, 'task')->result();
		$this->load->view('CobaTambah/cobaedit', $data);
	}

	function update(){
		$Id_Task = $this->input->post('Id_Task');
		$NamaTask = $this->input->post('NamaTask');
		$NamaPelajaran = $this->input->post('NamaPelajaran');
		$Deskripsi = $this->input->post('Deskripsi');
		$KisarHarga = $this->input->post('KisarHarga');
	 
		$data	= array(
			'NamaTask' 		=> $NamaTask,
			'NamaPelajaran' => $NamaPelajaran,
			'Deskripsi' 	=> $Deskripsi,
			'KisarHarga' 	=> $KisarHarga
		);
	 
		$where = array(
			'Id_Task' => $Id_Task
		);
	 
		$this->m_data->update_data($where,$data,'task');
		redirect('COBAAAA/Crud/index');
	}

	function hapus($Id_Task){
		$where = array('Id_Task' => $Id_Task);
		$this->m_data->hapus_data($where,'task');
		redirect('COBAAAA/Crud/index');
	}
}