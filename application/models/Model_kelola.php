<?php
class Model_kelola extends CI_Model {

	// Kelola User
	function show_user() {
		$user = $this->db->query("SELECT * FROM tbl_admin");
		return $user;
	}

	function add_user($data, $table) {
		return $this->db->insert($table, $data);

	}

	function edit_data($where, $table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete_user($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	//Kelola Menu
	function show_menu() {
		$menu = $this->db->query("SELECT * FROM tbl_menu");
		return $menu;
	}

	function edit_menu($where, $table) {
		return $this->db->get_where($table, $where);
	}

	function update_menu($where, $data, $table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function IDmenu() {
		$this->db->select('id_menu AS kode ');
		$this->db->order_by('id_menu', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_menu');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode);
		} else {
			$kode = 1;
		}
		return $kode;
	}

	function add_rekomendasi($data3, $table) {
		return $this->db->insert($table, $data3);

	}

}
?>