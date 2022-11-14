<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function authenticate()
	{
		if($this->input->method()=="post"){

		} else {
			redirect('logout');
		}
	}

	public function logout($value='')
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
