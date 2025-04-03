<?php
session_start();
include_once "sesi.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="ADMIN - BONANZA MOTOR LAMONGAN";
switch($modul){
	case 'awal'		: default: $aktif="Beranda";$judul="Beranda $jawal";	include "plain.php"; 					break;
	case 'admin'	: $aktif="Admin"; 		$judul="Modul $jawal"; 			include "modul/administrator/index.php";break;
	case 'motor'	: $aktif="motor"; 		$judul="Modul motor $jawal"; 	include "modul/motor/index.php"; 		break;
	case 'apparel'	: $aktif="apparel"; 	$judul="Modul apparel $jawal";	include "modul/apparel/index.php"; 		break;
	case 'aksesoris': $aktif="aksesoris"; 	$judul="Modul aksesoris $jawal";include "modul/aksesoris/index.php"; 	break;
	case 'user'		: $aktif="user"	; 		$judul="Modul user $jawal"; 	include "modul/user/index.php"; 		break;
	case 'promo'	: $aktif="promo";		$judul="Modul promo $jawal";	include "modul/promo/index.php"; 		break;
	case 'laporan'	: $aktif="laporan"; 	$judul="laporan $jawal"; 		include "modul/laporan/index.php"; 		break;
	case 'pelanggan': $aktif="pelanggan"; 	$judul="pelanggan $jawal"; 		include "modul/pelanggan/index.php"; 	break;
}
?>
