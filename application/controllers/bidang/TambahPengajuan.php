<?php

class TambahPengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengajuan_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view("bidang/tambahPengajuan");
	}

	public function upload()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view("bidang/tambahPengajuan");
		} else {
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'doc|docx|pdf';
			$config['max_size']             = 0;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('filename')) {
				$this->form_validation->set_rules('filename', 'Document', 'trim|required');
			} else {
				$file = $this->upload->data();
				$data = [
					'id_user' => $this->session->id,
					'judul' => htmlspecialchars($this->input->post('judul', true)),
					'file' => $file['file_name'],
					'status' => 'Menunggu pengecekan',
				];
				$this->db->insert('pengajuan', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Surat Berhasil di ajukan
          </div>');
				$this->load->view("bidang/pengajuan");
			}
		}
	}
}
