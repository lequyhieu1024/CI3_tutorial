<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Student_model');
	}

	public function index()
	{
		$data['title'] = 'Student';

		$config['base_url'] = base_url('Student/index');
		$config['total_rows'] = $this->Student_model->count_all();
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['students'] = $this->Student_model->filter($config['per_page'], $page);
		$data['links'] = $this->pagination->create_links();
		$data['content'] = $this->load->view('students/index', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function show($id)
	{
		$data['title'] = 'Student';
		$data['student'] = $this->Student_model->find($id);
		$data['content'] = $this->load->view('students/show', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function change_avatar($id)
	{
		$config = array(
			'upload_path' => 'application/assets/uploads/images/',
			'allowed_types' => 'gif|jpg|png|jpeg|webp',
			'max_size' => 2048,
			'encrypt_name' => TRUE
		);

		$this->upload->initialize($config);

		if ($this->upload->do_upload('avatar')) {
			$this->Student_model->change_avatar($id, $config['upload_path'] . $this->upload->data('file_name'));
			$this->session->set_flashdata('message', 'Avatar has been updated');
		} else {
			$this->session->set_flashdata('message', $this->upload->display_errors());
		}
		redirect('Student/show/' . $id);
	}
}
