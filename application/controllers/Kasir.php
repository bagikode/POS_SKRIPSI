<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	function __construct() {

		parent::__construct();

		// $this->load->model('Model_crud');
		if ($this->session->userdata('status') != 'login') {
			redirect('login');
		} else {
			$this->load->model('Model_crud');
		}

	}

	public function index() {

		$x['data'] = $this->Model_crud->show_meja();

		$this->load->view('header');
		$this->load->view('sidebar_kasir');
		$this->load->view('pilih_meja', $x);
		$this->load->view('footer');
	}

	public function bill($no_meja) {

		$data['showbill'] = $this->Model_crud->show_bill($no_meja);

		//menghitung total harga
		$hasil = $this->db->query("SELECT SUM(total_harga) AS jumlah_keseluruhan FROM tbl_keranjang WHERE no_meja=$no_meja AND status='done'");
		$jumlah = $hasil->result();
		$data['jumlah_keseluruhan'] = $jumlah[0]->jumlah_keseluruhan;

		//menghitung total barang
		$totalbarang = $this->Model_crud->totalbarang($no_meja);
		$data['totalbarang'] = $totalbarang[0]->totalbarang;

		$this->load->view('header');
		$this->load->view('sidebar_kasir');
		$this->load->view('kasir', $data);
		$this->load->view('footer');
	}
	public function tambah_aksi() {

		$data = array(

			'no_meja' => $this->input->post('no_meja'),
			'total_barang' => $this->input->post('total_barang'),
			'total' => $this->input->post('jumlah_keseluruhan'),
			'bayar' => $this->input->post('bayar'),
			'kembali' => $this->input->post('kembali'),

		);

		$this->Model_crud->done($data);

		$data2 = $this->Model_crud->IDorder();

		$data1 = array(
			'status' => 'finish',
			'id_order' => $data2,
		);
		$where = array(
			'no_meja' => $this->input->post('no_meja'),
			'status' => 'done',
		);

		$this->Model_crud->updatestatus($where, $data1);

		redirect('kasir');

	}

}
?>