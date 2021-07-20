<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moons extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Moons_model');
		$this->load->library('form_validation');

	}
	
	public function index()
	{
		$data['judul'] = 'Home';

		$this->load->view('template/header',$data);
		$this->load->view('home_menu');
		$this->load->view('template/footer');
	}



	public function add()
	{
		$data['judul'] = 'Form Pengajuan';

		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('noktp','No KTP','required');
		$this->form_validation->set_rules('','','');

		if ($this->form_validation->run() == FALSE ){
			$this->load->view('template/header', $data);
			// $this->load->view('home_menu');
			$this->load->view('pengajuan/form_pengajuan');
			$this->load->view('template/footer');
		} else {
			$this->Moons_model->create();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('Moons/laporan');
		}
	}



	public function laporan()
	{

		$data['judul'] = 'List Pengajuan';

		$data['form_cost'] = $this->Moons_model->getAllPengajuan();
		$this->load->view('template/header', $data);
		$this->load->view('pengajuan/list_pengajuan', $data);
		$this->load->view('template/footer');
	}


	public function hapus($id)
	{
		$this->Moons_model->hapusData($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Moons/laporan');

	}

	public function edit($id)
	{
		$this->Moons_model->editData($id);
		$this->session->set_flashdata('flash', 'Diedit');
		redirect('Moons/laporan');

	}
}
