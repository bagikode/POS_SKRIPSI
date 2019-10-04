<?php
include 'conn.php';

$queryResult = $connection->query("SELECT * FROM tbl_menu WHERE jenis_menu = 'makanan'");

$result = array();

while ($fetchdata = $queryResult->fetch_assoc()) {
	$result[] = $fetchdata;
}

echo json_encode($result);

?>