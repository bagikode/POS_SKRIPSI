<?php

    include 'conn.php';
    
    $id_menu = $_POST['id_menu'];
    $no_meja = $_POST['no_meja'];
    $nama_menu = $_POST['nama_menu'];
    $jenis_menu = $_POST['jenis_menu'];
    $total_harga = $_POST['total_harga'];
    $total_barang = $_POST['total_barang'];
    
    
    $query = mysqli_query($connection, "SELECT * FROM tbl_keranjang WHERE no_meja='$no_meja' AND nama_menu='$nama_menu' AND jenis_menu='$jenis_menu' AND status='waiting'");
    $data   = mysqli_num_rows($query);

    if ($data > 0) {
        $query = mysqli_query($connection, "UPDATE tbl_keranjang set total_harga=total_harga+$total_harga,
         total_barang=total_barang+$total_barang WHERE no_meja='$no_meja' AND nama_menu='$nama_menu' AND jenis_menu='$jenis_menu' AND status='waiting'");
        
    } else {
        // INSERT
        $connection->query("INSERT INTO tbl_keranjang(id_menu,no_meja,nama_menu,jenis_menu,total_harga,total_barang) 
        VALUES ('".$id_menu."','".$no_meja."','".$nama_menu."','".$jenis_menu."','".$total_harga."','".$total_barang."')");
    }
        
    
    
    
?>