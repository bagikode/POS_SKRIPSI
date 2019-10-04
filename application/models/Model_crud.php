<?php
class Model_crud extends CI_Model {

	//model untuk login
	function cek_login($table, $where) {
		return $this->db->get_where($table, $where);
	}

	//model untuk dapur

	function jumlahharga($no_meja) {
		$hasil = $this->db->query("SELECT SUM(total_harga) AS jumlah_keseluruhan FROM tbl_keranjang WHERE no_meja=$no_meja");
		$hasil->result();
	}

	function show_order() {

		$hasil = $this->db->query("SELECT * FROM tbl_keranjang WHERE status='waiting' ORDER BY tanggal ASC");
		return $hasil;
	}

	function update_data($id_keranjang) {
		$this->db->query("UPDATE tbl_keranjang SET status='done' WHERE id_keranjang=$id_keranjang");
	}

	//model untuk kasir

	function show_meja() {
		$meja = $this->db->query("SELECT * FROM tbl_meja");
		return $meja;
	}

	function show_bill($no_meja) {

		$hasil = $this->db->query("SELECT no_meja,nama_menu,SUM(total_barang) as total_barang,status,sum(total_harga)as total_harga FROM tbl_keranjang WHERE status='done' AND no_meja='$no_meja' group by id_menu");
		return $hasil;
	}

	function totalbarang($no_meja) {

		$total_barang = $this->db->query("SELECT SUM(total_barang) as totalbarang FROM tbl_keranjang WHERE no_meja='$no_meja' AND status='done' ");
		return $total_barang->result();
	}

	//untuk insert data ke tabel order dan detail dari layout kasir, dan mengubah status done menjadi finish
	function done($data) {

		return $this->db->insert('tbl_order', $data);

	}

	function updatestatus($where, $data1) {

		$this->db->where($where);
		$this->db->update('tbl_keranjang', $data1);
	}

	//untuk mencetak tagihan pada layout kasir
	function tagihanKasir() {
		$hasil = $this->db->query("SELECT * FROM tbl_order");
		return $hasil;
	}

	function invoicePrint($id_order) {
		$hasil = $this->db->query("SELECT a.id_order, a.no_meja, b.nama_menu, a.total, b.total_barang, b.total_harga, a.bayar,a.kembali, a.tanggal_kasir FROM tbl_order a, tbl_keranjang b WHERE a.id_order = b.id_order AND a.id_order = $id_order");
		return $hasil;
	}

	//untuk mendapatkan ID order lalu diupdate pada tbl_keranjang
	public function IDorder() {
		$this->db->select('id_order AS kode ');
		$this->db->order_by('id_order', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_order');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode);
		} else {
			$kode = 1;
		}
		return $kode;
	}

	//menghitung total barang pada tbl_order
	function totalBarangOrder() {

		$totalBrg = $this->db->query("SELECT SUM(total_barang) as totalBrg, SUM(total) as total FROM tbl_order");
		return $totalBrg->result();

	}

	//menampilkan menu paling banyak dipesan
	function menuPesan() {
		$hasil = $this->db->query("SELECT nama_menu, SUM(total_barang) as total_barang FROM tbl_keranjang group by id_menu ASC LIMIT 1");
		return $hasil;

	}

}
?>