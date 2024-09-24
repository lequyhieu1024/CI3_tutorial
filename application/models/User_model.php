<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_user($email, $password)
	{
		$user = $this->db->where('email', $email)->get('users')->row();
		if (!empty($user)) {
			if(password_verify($password, $user->password)) {
				return $user;
			}
		}
		return false;
	}
}
