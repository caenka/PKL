<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['tb_users'] = $this->db->get_where('tb_users', ['email' => $this->session->set_userdata('email')])->row_array();

		$this->load->view("admin/dashboard");
	}
}
