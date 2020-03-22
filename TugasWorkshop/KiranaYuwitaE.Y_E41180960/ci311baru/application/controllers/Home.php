<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent:: __construct();
		if($this->session->userdata('is_login')==FALSE){
		redirect('Welcome/index');
		}
	}
	public function index()
	{
		$data['content'] = 'admin/dashboard';
		$this->load->view('template/index', $data);
	}
	public function pesan()
	{
		$data['content'] = 'admin/pesan';
		$this->load->view('template/index', $data);
	}
	public function laporan()
	{
		$data['content'] = 'admin/laporan';
		$this->load->view('template/index', $data);
	}
	public function grafik()
	{
		$data['content'] = 'admin/grafik';
		$this->load->view('template/index', $data);
	}
	public function utama()
	{
		$data['content'] = 'admin/utama';
		$this->load->view('template/index', $data);
	}
	public function contact()
	{
		$data['content'] = 'admin/contact';
		$this->load->view('template/index', $data);
	}
	
}
