<?php
// Koneksi

$conn = mysqli_connect("localhost", "root", "", "db_foodo") or die(mysqli_error());

//Buat array bobot { C1 = 35%; C2 = 25%; C3 = 25%; dan C4 = 15%.}
$bobot = array(0.50, 0.25, 0.25);

//Buat fungsi tampilkan nama
function getNama($id) {
	$conn = mysqli_connect("localhost", "root", "", "db_foodo") or die(mysqli_error());

	$q = mysqli_query($conn, "SELECT * FROM tbl_menu where id_menu = '$id'");
	$d = mysqli_fetch_array($q);
	return $d['nama_menu'];
}

//Setelah bobot terbuat select semua di tabel Matrik
$sql = mysqli_query($conn, "SELECT * FROM tbl_rekomendasi");
//Buat tabel untuk menampilkan hasil
echo "<H3>Matrik Awal</H3>
 <table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
  <tr>
   <td>No</td>
   <td>Nama</td>
   <td>Rasa</td>
   <td>Kebersihan</td>
   <td>Penampilan</td>
   <td>jumlah poin</td>
  </tr>
  ";
$no = 1;
while ($dt = mysqli_fetch_array($sql)) {
	$jumlah = ($dt['rasa']) + ($dt['kebersihan']) + ($dt['penampilan']);
	echo "<tr>
   <td>$no</td>
   <td>" . getNama($dt['id_menu']) . "</td>
   <td>$dt[rasa]</td>
   <td>$dt[kebersihan]</td>
   <td>$dt[penampilan]</td>
   <td>$jumlah</td>
  </tr>";
	$no++;
}
echo "</table>";

//Lakukan Normalisasi dengan rumus pada langkah 2
//Cari Max atau min dari tiap kolom Matrik
$crMax = mysqli_query($conn, "SELECT max(rasa) as maxK1,
      max(kebersihan) as maxK2,
      max(penampilan) as maxK3
   FROM tbl_rekomendasi");
$max = mysqli_fetch_array($crMax);

//Hitung Normalisasi tiap Elemen
$sql2 = mysqli_query($conn, "SELECT * FROM tbl_rekomendasi");
//Buat tabel untuk menampilkan hasil
echo "<H3>Matrik Normalisasi</H3>
 <table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
  <tr>
   <td>No</td>
   <td>Nama</td>
   <td>Rasa</td>
   <td>Kebersihan</td>
   <td>Penampilan</td>
  </tr>
  ";
$no = 1;
while ($dt2 = mysqli_fetch_array($sql2)) {
	echo "<tr>
   <td>$no</td>
   <td>" . getNama($dt2['id_menu']) . "</td>
   <td>" . round($dt2['rasa'] / $max['maxK1'], 2) . "</td>
   <td>" . round($dt2['kebersihan'] / $max['maxK2'], 2) . "</td>
   <td>" . round($dt2['penampilan'] / $max['maxK3'], 2) . "</td>
  </tr>";
	$no++;
}
echo "</table>";

//Proses perangkingan dengan rumus langkah 3
$sql3 = mysqli_query($conn, "SELECT * FROM tbl_rekomendasi");
//Buat tabel untuk menampilkan hasil
echo "<H3>Perangkingan</H3>
 <table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
  <tr>
   <td>no</td>
   <td>Nama</td>
   <td>total poin</td>
   <td>SAW</td>
   <td>ket</td>
  </tr>
  ";

//Kita gunakan rumus (Normalisasi x bobot)
while ($dt3 = mysqli_fetch_array($sql3)) {
	$jumlah = ($dt3['rasa']) + ($dt3['kebersihan']) + ($dt3['penampilan']);
	$poin = round(
		(($dt3['rasa'] / $max['maxK1']) * $bobot[0]) +
		(($dt3['kebersihan'] / $max['maxK2']) * $bobot[1]) +
		(($dt3['penampilan'] / $max['maxK3']) * $bobot[2]), 2);

	$data[] = array('nama' => getNama($dt3['id_menu']),
		'jumlah' => $jumlah,
		'poin' => $poin);

}

//mengurutkan data
foreach ($data as $key => $isi) {
	$nama[$key] = $isi['nama'];
	$jlh[$key] = $isi['jumlah'];
	$poin1[$key] = $isi['poin'];
}
array_multisort($poin1, SORT_DESC, $jlh, SORT_DESC, $data);
$no = 1;
$h = "juara";
$juara = 1;
$hr = 1;

foreach ($data as $item) {
	?>
   <tr>
   <td><?php echo $no ?></td>
   <td><?php echo $item['nama'] ?></td>
   <td><?php echo $item['jumlah'] ?></td>
   <td><?php echo $item['poin'] ?></td>
   <td><?php echo "$h $juara" ?></td>
   </tr>
   <?php
$no++;
	if ($no >= 4) {
		$h = "  ";
		$juara = " ";
	} else {
		$juara++;
	}

}
echo "</table>";

?>