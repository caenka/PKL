<?php

class KelolaAkun extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
	}

	public function index()
	{
<<<<<<< HEAD
		// $data['tb_users'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
		// $data['tb_users'] = $this->session->userdata('name');
		// $data['tb_users'] = $this->session->userdata('name');
		$user['tb_users'] = $this->Admin_model->getdataUser();
		// $variabel = array_push($user, $data);
		// print_r($variabel);
		// die;

=======

		$user['tb_users'] = $this->Admin_model->getdataUser();

		// print_r($variabel);
		// die;

>>>>>>> 88026f3ff94591127c1d053544ce18d8b15dd63e
		$this->load->view("admin/kelolaAkun", $user);
	}

	public function addAkun()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tb_users.email]', array('is_unique' => 'This email has already registered!'));
		$this->form_validation->set_rules('password', 'Passowrd', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('bidang', 'Bidang', 'required');

		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'bidang' => htmlspecialchars($this->input->post('bidang', true)),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time(),
			];
			// var_dump($data);
			// die;
			if ($this->db->insert('tb_users', $data)) {
				echo "YES";
			} else {
				echo "NO";
			}
		}
	}
}
