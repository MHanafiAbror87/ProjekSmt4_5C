<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public function select_all_user() {
		$sql = "SELECT * FROM tbl_users";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = " SELECT tbl_users.id AS id, tbl_users.username AS user, tbl_users.password AS pass, tbl_users.nama_user AS nama, tbl_users.role AS roles FROM tbl_users";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT tbl_users.id AS id_user, tbl_users.username AS user, tbl_users.password AS pass , tbl_users.nama_user AS nama, tbl_users.role AS roles FROM tbl_users WHERE tbl_user.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE tbl_users SET username='" .$data['username'] ."', password='" .$data['password'] ."', nama_user=" .$data['nama_user'] .", role=" .$data['role'] ." WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_users WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$sql = "INSERT INTO tbl_users VALUES('','" .$data['username'] ."','" .$data['password'] ."'," .$data['nama_user'] ."," .$data['role'] .")";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('tbl_users', $data);
		
		return $this->db->affected_rows();
	}

	public function check_username($username) {
		$this->db->where('username', $username);
		$data = $this->db->get('tbl_users');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('user');

		return $data->num_rows();
	}
}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */