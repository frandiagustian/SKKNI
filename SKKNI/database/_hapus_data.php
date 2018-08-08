<?php
	include "config/koneksi.php";
	
	$id = $_GET['id'];
	
	$query = mysql_query("delete from peserta where nik='$id'") or die(mysql_error());
	if ($query) {
	header('location:laporan/data_peserta.php?a=y');
	}
?>