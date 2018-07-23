<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$data['users'] = $this->db->get('users')->result();
		$this->load->view('view_user',$data);
	}
	public function insert()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("username",'Username','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_user');
		} else {
			$post = $this->input->post();
			$this->db->insert("users",$post);
			redirect('User','refresh');
		}
	}
	public function update($id)
	{
		$data['user'] = $this->db->where("id",$id)->get("users")->row(0);
		$this->form_validation->set_rules("username",'Username','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('update_user',$data);
		} else {
			$post = $this->input->post();
			$this->db->where("id",$id);
			$this->db->update("users",$post);
			redirect('User','refresh');
		}
	}
	public function delete($id)
	{
		$this->db->where("id",$id)->delete("users");
		redirect('User','refresh');
	}
}
