<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department_model extends CI_Model
{
	protected $table = 'departments';
	public function __construct()
	{
		parent::__construct();
	}

	public function filter($size, $page)
	{
		$this->db->limit($size, $page);
		return $this->db->get($this->table)->result();
	}

	public function count_all()
	{
		return $this->db->count_all($this->table);
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function find($id)
	{
		return $this->db->get_where($this->table, ['id' => $id])->row();
	}

	public function update($id, $data)
	{
		return $this->db->update($this->table, $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('departments', ['id' => $id]);
	}
}
