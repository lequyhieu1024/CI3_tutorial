<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
			return redirect(base_url('auth/login_view'));
		}
		$data = array(
			'title' => "Trang chủ",
			'email' => $this->session->userdata('email'),
			'is_logged_in' => $this->session->userdata('logged_in'),
		);
		$data['content'] = $this->load->view('home', $data, TRUE);
		$this->load->view('layout', $data);
	}
}
