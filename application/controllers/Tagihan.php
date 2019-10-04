<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

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

		$data['tagihankasir'] = $this->Model_crud->tagihanKasir();
		$this->load->view('header');
		$this->load->view('sidebar_kasir');
		$this->load->view('cetak_tagihan', $data);
		$this->load->view('footer');
	}

	public function cetak($id_order) {

		$this->Model_crud->updateTagihan($id_order);
		redirect('tagihan');

	}

	public function cetakInvoice($id_order) {
		$data['invoiceprint'] = $this->Model_crud->invoicePrint($id_order);
		$this->load->view('invoice', $data);

	}
}

?>