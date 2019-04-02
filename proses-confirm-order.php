<?php

session_start();

include 'config.php';

$db = new Config();

	$total_harga = 0;
 	// foreach isi dari sesi menu_cart
	foreach($_SESSION["menu_cart"] as $keys => $values) {
		$harga = $values['harga'] * $values['jumlah'];
   		$total_harga = $total_harga + $harga;
	}
	// mengisi variabel yang diperlukan untuk setiap pesanan
	$username = $_SESSION['username'];
    $waktu = $_GET['waktu-ambil'];
    $waktu_ambil = date("d/m/y H:i",strtotime($waktu));
    $notes = $_GET['notes'];
 	$saldo = $db->runQuery("SELECT saldo FROM users WHERE username = '$username'");
 	
 	// validasi kecukupan saldo dengan total harga
 	if ($saldo[0]['saldo'] >= $total_harga) {

 		// insert data yang diperlukan ke database katika saldo cukup
	 	$db->runQuery("INSERT INTO orders (username, total_harga, catatan, waktu_ambil) 
	 		VALUES ('$username', '$total_harga', '$notes', '$waktu_ambil')");

	 	$orderBaru = $db->runQuery("SELECT id FROM orders WHERE username = '$username' ORDER BY waktu_ambil DESC LIMIT 1");
	 	$id_order = reset($orderBaru)['id'];

	 	$minSaldo = 0;
	 	$minSaldo = $saldo[0]['saldo'] - $total_harga;
	 	// update saldo setelah dikurangi dengan total harga
	 	$db->runQuery("UPDATE users  SET saldo = '$minSaldo' WHERE username = '$username' ");


	 	foreach($_SESSION["menu_cart"] as $keys => $values) {
		    $menu = $values['nama'];
		    $id_menu = $values['id'];
		    $jumlah = $values['jumlah'];
		    $harga = $values['harga'] * $values['jumlah'];
		   $db->runQuery("INSERT INTO orders_detail (id_order, username, id_menu, nama, harga, jumlah) 
	 		VALUES ('$id_order', '$username', '$id_menu', '$menu', '$harga', '$jumlah')");
		 }
	 	
 		$_SESSION['success'] = '<strong> Transaksi sukses! </strong> Silakan cek <a href="invoice.php" target="_blank">Invoice</a> anda.';

 		header('location: confirm-order.php');
 	} else {
 		// muncul alert ketika saldo kurang
 		$_SESSION['failed'] = 'Maaf, saldo anda kurang. Silakan hubungi administrator untuk isi saldo.';
 		header('location: confirm-order.php');
 	}




?>