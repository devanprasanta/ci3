<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('Login','refresh');
		}
	}
    public function index()
    {
	  $this->load->model('blog_model');
        $artikel['data'] = $this->blog_model->get_all_artikel();

        $this->load->view("templates/header");
        $this->load->view('datatables/dt_view', $artikel);
        $this->load->view("templates/footer");
    }
}
