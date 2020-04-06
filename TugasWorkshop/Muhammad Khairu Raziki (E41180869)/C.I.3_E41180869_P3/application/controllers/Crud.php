<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
    function tambah_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_user = $this->input->post('nama_user');
		$role = $this->input->post('role');
 
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_user' => $nama_user,
			'role' => $role
			);
		$this->m_data->input_data($data,'tbl_users');
		redirect('crud/index');
    }
    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tbl_users');
		redirect('crud/index');
	}
 
    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'tbl_users')->result();
        $this->load->view('v_edit',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_user = $this->input->post('nama_user');
		$role = $this->input->post('role');
     
        $data = array(
            'username' => $username,
			'password' => $password,
			'nama_user' => $nama_user,
			'role' => $role
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data->update_data($where,$data,'tbl_users');
        redirect('crud/index');
    }
}
