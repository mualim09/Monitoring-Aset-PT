<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Barang_model');
		$this->load->model('Kendaraan_model');
		$this->load->model('Properti_model');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_level == 2 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Beranda';

		//jumlah barang
		$data['total_barang']= $this->Barang_model->get_total($this->session->userdata('id_rayon'), $this->session->userdata('id_level'));
		$data['total_kendaraan']= $this->Kendaraan_model->get_total($this->session->userdata('id_rayon'), $this->session->userdata('id_level'));
		$data['total_properti']= $this->Properti_model->get_total();

		//total harga aset
		$data['total_harga_barang'] = $this->Barang_model->get_total_harga($this->session->userdata('id_rayon'), $this->session->userdata('id_level'));
		$data['total_harga_kendaraan'] = $this->Kendaraan_model->get_total_harga($this->session->userdata('id_rayon'), $this->session->userdata('id_level'));
		$data['total_harga_properti'] = $this->Properti_model->get_total_harga();

		//get limit
		$data['barang'] = $this->Barang_model->get_limit($this->session->userdata('id_rayon'), $this->session->userdata('id_level'));
		$data['kendaraan'] = $this->Kendaraan_model->get_limit($this->session->userdata('id_rayon'), $this->session->userdata('id_level'));
		$data['properti'] = $this->Properti_model->get_limit();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/beranda/index', $data);
		$this->load->view('admin/templates/footer');
	}
}