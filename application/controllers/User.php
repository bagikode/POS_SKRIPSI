<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {

		parent::__construct();

		// $this->load->model('Model_kelola');
		if ($this->session->userdata('status') != 'login') {
			redirect('login');
		} else {
			$this->load->model('Model_kelola');
		}

	}

	public function index() {

		$x['data'] = $this->Model_kelola->show_user();

		$this->load->view('header');
		$this->load->view('sidebar_admin');
		$this->load->view('tampilan_user', $x);
		$this->load->view('footer');
	}

	public function showAddUser() {
		$this->load->view('header');
		$this->load->view('sidebar_admin');
		$this->load->view('tambah_user');
		$this->load->view('footer');
	}

	//menambahkan user
	public function addUser() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = array(

			'username' => $username,
			'password' => md5($password),
			'role' => $role,

		);

		$this->Model_kelola->add_user($data, 'tbl_admin');
		redirect('user');
	}

	public function showEditUser($id_admin) {
		$this->load->view('header');
		$this->load->view('sidebar_admin');

		$where = array('id_admin' => $id_admin);
		$data['x'] = $this->Model_kelola->edit_data($where, 'tbl_admin')->result();

		$this->load->view('tampilan_edit_user', $data);
		$this->load->view('footer');
	}

	public function editUser() {

		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = array(

			'username' => $username,
			'password' => md5($password),
			'role' => $role,

		);

		$where = array(
			'id_admin' => $id_admin,
		);

		$this->Model_kelola->update_data($where, $data, 'tbl_admin');
		redirect('user');
	}

	public function delete($id_admin) {
		$where = array('id_admin' => $id_admin);
		$this->Model_kelola->delete_user($where, 'tbl_admin');
		redirect('user');
	}

}
