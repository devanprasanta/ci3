<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|callback_proses');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('Login');
		}else{
			redirect('Home','refresh');
		}
	}
	public function proses($username)
	{
		$password = md5($this->input->post('password'));
		$query = $this->db->where('username',$username)->where('password',$password)->get('users');
		if ($query->num_rows() == 1) {
			$array = array(
				'id' => $query->row(0)->id,
				'username' => $username,
				'level' => $query->row(0)->level,
				'logged_in' => true
			);
			
			$this->session->set_userdata( $array );
			return true;
		}else{
			$this->form_validation->set_message('proses','Username and password tidak valid');
			return false;
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
}
