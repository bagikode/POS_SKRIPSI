<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {

		parent::__construct();

		$this->load->model('Model_crud');

	}

	public function index() {

		$this->load->view('login');
	}

	function aksi_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password),
		);
		$cek = $this->Model_crud->cek_login("tbl_admin", $where)->num_rows();
		$data = $this->Model_crud->cek_login("tbl_admin", $where)->result();
		if ($cek > 0) {
			if ($data[0]->role == 'dapur') {

				$data_session = array(
					'nama' => $username,
					'status' => "login",
				);

				$this->session->set_userdata($data_session);
				//echo $this->session->userdata('status');
				redirect('dapur');

			} elseif ($data[0]->role == 'kasir') {

				$data_session = array(
					'nama' => $username,
					'status' => "login",
				);

				$this->session->set_userdata($data_session);

				redirect('kasir');
			} else {

				$data_session = array(
					'nama' => $username,
					'status' => "login",
				);

				$this->session->set_userdata($data_session);

				redirect('laporan');
			}

		} else {
			$this->session->set_flashdata('gagallogin', 'true');
			redirect('Login');
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

}

?>
