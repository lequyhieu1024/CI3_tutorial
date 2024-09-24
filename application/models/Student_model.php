<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{
	protected $table = 'students';

	public function __construct()
	{
		parent::__construct();
	}

	public function filter($size, $page)
	{
		$this->db->select("$this->table.*, users.*")
			->from($this->table)
			->join('users', "{$this->table}.user_id = users.id")
			->limit($size, $page);

		return $this->db->get()->result();
	}


	public function count_all()
	{
		return $this->db->count_all($this->table);
	}

	public function find($id)
	{
		$this->db->select("$this->table.*, users.name, users.email, departments.name as department")
			->from($this->table)
			->join('users', "{$this->table}.user_id = users.id")
			->join('departments', "{$this->table}.department_id = departments.id")
			->where("$this->table.id", $id);

		return $this->db->get()->row();
	}

	public function change_avatar($id, $avatar)
	{
		$student = $this->db->where('id', $id)->get($this->table)->row();
		if (!empty($student->avatar) && file_exists($student->avatar)) {
			unlink($student->avatar);
		}
		return $this->db->where('id', $id)->update($this->table, ['avatar' => $avatar]);
	}



}
