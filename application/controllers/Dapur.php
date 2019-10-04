<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dapur extends CI_Controller {

	function __construct() {

		parent::__construct();
		//$this->load->model('Model_crud');

		if ($this->session->userdata('status') != 'login') {
			redirect('login');
		} else {
			$this->load->model('Model_crud');
		}

	}

	public function index() {

		$x['data'] = $this->Model_crud->show_order();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dapur', $x);
		$this->load->view('footer');
	}

	public function update($id_keranjang) {

		$this->Model_crud->update_data($id_keranjang);
		redirect('dapur');

	}

}
?>