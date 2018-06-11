<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$this->load->view('home');
	}

	public function create()
	{
		$this->load->model('artikel');
		// Judul Halaman
		$data['page_title'] = 'Buat Kategori Baru';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('categories/cat_create', $data);
			$this->load->view('templates/footer');
		} else {
			$this->artikel->create_category();
			redirect('home');
		}
	}

	public function kekategori()
	{
		$this->load->view('kategori');
	}
}