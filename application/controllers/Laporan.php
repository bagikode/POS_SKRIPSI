<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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

		$jumlah = $this->db->get('tbl_order')->num_rows();
		$data['jumlah'] = $jumlah;

		$totalBrg = $this->Model_crud->totalBarangOrder();
		$data['totalBrg'] = $totalBrg[0]->totalBrg;

		$total = $this->Model_crud->totalBarangOrder();
		$data['total'] = $total[0]->total;

		$data['menu'] = $this->Model_crud->menuPesan();

		$this->load->view('header');
		$this->load->view('sidebar_admin');
		$this->load->view('laporan', $data);
		$this->load->view('footer');
	}

}

?>