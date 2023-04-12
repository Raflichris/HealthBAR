<?php

class usermodel extends CI_model
{
	public function getAllUser()
	{
		return $this->db->get('user')->result_array();

	}

	public function newUser()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"noHp" => $this->input->post('noHp', true),
		];

		$this->db->insert('user', $data);
	}

	public function hapusDataUser($id)
	{
		$this->db->delete('user', ['id' => $id]); 
	}

	public function getUserById($id)
	{ 
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function ubahDataUser()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"noHp" => $this->input->post('noHp', true),
		];
		$this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
	}

	public function cariDataUser()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('noHp', $keyword);


		return $this->db->get('user')->result_array();
	}
}
