<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Department_model');
	}

	public function index()
	{
		$data['title'] = 'Department';

		$config['base_url'] = base_url('Department/index');
		$config['total_rows'] = $this->Department_model->count_all();
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['departments'] = $this->Department_model->filter($config['per_page'], $page);
		$data['links'] = $this->pagination->create_links();
		$data['content'] = $this->load->view('departments/index', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Create Department';

		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'name', 'required');

			if ($this->form_validation->run()) {
				$data = array(
					'name' => $this->input->post('name'),
					'description' => $this->input->post('description'),
				);
				$this->Department_model->insert($data);
				$this->session->set_flashdata('message', 'Created department successfully!');
				redirect(base_url('department'));
			}
		}

		$data['content'] = $this->load->view('departments/create', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Department';
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'name', 'required');
			if ($this->form_validation->run()) {
				$data = array(
					'name' => $this->input->post('name'),
					'description' => $this->input->post('description'),
				);
				$this->Department_model->update($id, $data);
				$this->session->set_flashdata('message', 'Updated department successfully!');
				redirect(base_url('department'));
			}
		}
		$data['department'] = $this->Department_model->find($id);
		$data['content'] = $this->load->view('departments/edit', $data, TRUE);
		$this->load->view('layout', $data);

	}

	public function delete($id)
	{
		$this->Department_model->delete($id);
		$this->session->set_flashdata('message', 'Deleted department successfully!');
		redirect(base_url('department'));
	}
}
