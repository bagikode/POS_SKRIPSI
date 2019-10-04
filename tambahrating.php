<?php

include 'conn.php';

$id_menu = $_POST['id_menu'];
$rasa = $_POST['rasa'];
$kebersihan = $_POST['kebersihan'];
$penampilan = $_POST['penampilan'];

$query = mysqli_query($connection, "SELECT * FROM tbl_rekomendasi WHERE id_menu='$id_menu'");
$data = mysqli_num_rows($query);

if ($data > 0) {
	$query = mysqli_query($connection, "UPDATE tbl_rekomendasi set rasa=rasa+$rasa,
         kebersihan=kebersihan+$kebersihan, penampilan=penampilan+$penampilan WHERE id_menu='$id_menu'");

} else {
	// INSERT
	$connection->query("INSERT INTO tbl_rekomendasi(id_menu,rasa,kebersihan,penampilan)
        VALUES ('" . $id_menu . "','" . $rasa . "','" . $kebersihan . "','" . $penampilan . "')");
}

?>