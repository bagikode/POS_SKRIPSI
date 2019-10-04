<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

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

		$x['data'] = $this->Model_kelola->show_menu();

		$this->load->view('header');
		$this->load->view('sidebar_admin');
		$this->load->view('tampilan_menu', $x);
		$this->load->view('footer');
	}

	public function showAddMenu() {

		$x['data'] = $this->Model_kelola->show_menu();

		$this->load->view('header');
		$this->load->view('sidebar_admin');
		$this->load->view('tambah_menu', $x);
		$this->load->view('footer');
	}

	public function addMenu() {
		$config['upload_path'] = './assets/menu';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 10000;
		// $config['max_width'] = 1024;
		// $config['max_height'] = 768;

		$this->load->library('upload', $config);

		$nama_menu = $this->input->post('nama_menu');
		$jenis_menu = $this->input->post('jenis_menu');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			redirect('Menu');
		} else {
			$fileName = $this->upload->data('file_name');
			$linkgambar = 'http://192.168.17.63/skripsi_foodo/assets/menu/' . $fileName;
			$data = array(

				'nama_menu' => $nama_menu,
				'jenis_menu' => $jenis_menu,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
				'gambar' => $linkgambar,

			);

			$this->Model_kelola->add_user($data, 'tbl_menu');

			$data1 = array('upload_data' => $this->upload->data());

			$data2 = $this->Model_kelola->IDmenu();

			$data3 = array(

				'id_menu' => $data2,

			);

			$this->Model_kelola->add_rekomendasi($data3, 'tbl_rekomendasi');

			redirect('Menu');
		}
	}

	public function showEditMenu($id_menu) {

		$this->load->view('header');
		$this->load->view('sidebar_admin');

		$where = array('id_menu' => $id_menu);
		$data['x'] = $this->Model_kelola->edit_menu($where, 'tbl_menu')->result();

		$this->load->view('tampilan_edit_menu', $data);
		$this->load->view('footer');
	}

	public function editMenu() {

		$config['upload_path'] = './assets/menu';
		$config['allowed_types'] = 'jpg|png|JPG|PNG|jpeg|JPEG';
		$config['max_size'] = 10000;
		// $config['max_width'] = 1024;
		// $config['max_height'] = 768;

		$this->load->library('upload', $config);

		$id_menu = $this->input->post('id_menu');
		$nama_menu = $this->input->post('nama_menu');
		$jenis_menu = $this->input->post('jenis_menu');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			redirect('Menu');
		} else {
			$fileName = $this->upload->data('file_name');
			$linkgambar = 'http://192.168.1.7/skripsi_foodo/assets/menu/' . $fileName;
			$data = array(

				'nama_menu' => $nama_menu,
				'jenis_menu' => $jenis_menu,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
				'gambar' => $linkgambar,

			);

			$where = array(
				'id_menu' => $id_menu,
			);

			$this->Model_kelola->update_menu($where, $data, 'tbl_menu');

			$data1 = array('upload_data' => $this->upload->data());
			redirect('Menu');
		}
	}

	public function delete($id_menu) {
		$where = array('id_menu' => $id_menu);
		$this->Model_kelola->delete_user($where, 'tbl_menu');
		redirect('Menu');
	}

}
