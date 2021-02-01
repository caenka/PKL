<?php

class Pengajuan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{ 
        $this->load->view("admin/pengajuan");
	}

	public function update()
	{
		var_dump( $_POST);	
	}
}