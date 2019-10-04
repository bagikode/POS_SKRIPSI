<?php
include 'conn.php';

$resultotal = $connection->query("SELECT SUM(total_harga) AS total FROM tbl_keranjang WHERE no_meja = 2 AND status='done' ");
$row = mysqli_fetch_assoc($resultotal);
$sum = $row['total'];

$queryResult = $connection->query("SELECT no_meja, id_menu,nama_menu,SUM(total_harga) AS total_harga, SUM(total_barang) AS total_barang, $sum AS total FROM `tbl_keranjang` WHERE no_meja=2 AND status='done' GROUP BY id_menu");

// $queryResult = $connection->query("SELECT a.total, b.no_meja,b.nama_menu,SUM(b.total_barang) as total_barang,b.status,sum(b.total_harga)as total_harga, c.id_menu FROM tbl_order a, tbl_keranjang b, tbl_menu c WHERE b.status='done' AND b.id_menu = c.id_menu AND b.no_meja=1 group by id_menu");

$result = array();

while ($fetchdata = $queryResult->fetch_assoc()) {
	$result[] = $fetchdata;
}

echo json_encode($result);

?>