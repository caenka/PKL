<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['tb_users'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
		// var_dump($data);
		// die;
		$this->load->view("bidang/dashboard", $data);
	}
}
