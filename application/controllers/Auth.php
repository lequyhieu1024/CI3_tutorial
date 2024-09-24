<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function login_view()
	{
		$data['title'] = "đăng nhập";
		$data['content'] = $this->load->view('auth/login', NULL, TRUE);
		$this->load->view('layout', $data);
	}

	public function login_process()
	{
		$user = $this->User_model->get_user($_POST['email'], $_POST['password']);
		if($user){
			$data = array(
				'email' => $_POST['email'],
				'logged_in' => TRUE,
			);
			$this->session->set_userdata($data);
			redirect(base_url('Home/index'));
		}
		echo 'khong ton tai email: ' . $_POST['email'];
	}

	public function register_view()
	{
		$data['title'] = "đăng ký thành viên";
		$data['content'] = $this->load->view('auth/register', NULL, TRUE);
		$this->load->view('layout', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth/login_view'));
	}
}

?>
