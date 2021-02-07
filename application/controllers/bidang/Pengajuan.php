<?php

class Pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengajuan_model');
	}

	public function index()
	{
		$data['pengajuan'] = $this->Pengajuan_model->getAll();

		$this->load->view("bidang/pengajuan", $data);
	}
}
