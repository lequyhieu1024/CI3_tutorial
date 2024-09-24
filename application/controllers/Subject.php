<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Subject_model');
	}

	public function index()
	{
		$data['title'] = 'Subject';

		$config['base_url'] = base_url('Subject/index');
		$config['total_rows'] = $this->Subject_model->count_all();
		$config['per_page'] = $this->input->get('size') ?? 10;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['links'] = $this->pagination->create_links();
		$data['subjects'] = $this->Subject_model->filter($config['per_page'], $page);

		$data['content'] = $this->load->view('subjects/index', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Create Subject';
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'name', 'required');
			if ($this->form_validation->run()) {
				$data = array(
					'name' => $this->input->post('name'),
					'description' => $this->input->post('description'),
				);
				$this->Subject_model->insert($data);
				$this->session->set_flashdata('message', 'Subject has been created.');
				redirect(base_url('Subject'));
			}
		}
		$data['content'] = $this->load->view('subjects/create', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Subject';

		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'name', 'required');
			if ($this->form_validation->run()) {
				$data = array(
					'name' => $this->input->post('name'),
					'description' => $this->input->post('description'),
				);

				$this->Subject_model->update($id, $data);
				$this->session->set_flashdata('message', 'Subject has been created.');
				redirect(base_url('Subject'));
			}
		}
		$data['subject'] = $this->Subject_model->find($id);
		$data['content'] = $this->load->view('subjects/edit', $data, TRUE);
		$this->load->view('layout', $data);
	}

	public function delete($id)
	{
		$this->Subject_model->delete($id);
		$this->session->set_flashdata('message', 'Subject has been deleted.');
		redirect(base_url('Subject'));
	}
}
