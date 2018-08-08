<?php
include 'config/koneksi.php';
// menyimpan data kedalam variabel
$nama                            = $_POST['nama'];
$nik                             = $_POST['nik'];
$hp                              = $_POST['hp'];
$email                           = $_POST['email'];
$skema_sertifikasi               = $_POST['skema_sertifikasi'];
$tempat_uji_kompetensi           = $_POST['tempat_uji_kompetensi'];
$recomendasi                     = $_POST['recomendasi'];
$tanggal_terbit_sertifikat       = $_POST['tanggal_terbit_sertifikat'];
$tanggal_lahir                   = $_POST['tanggal_lahir'];
$organisasi                      = $_POST['organisasi'];
// query SQL untuk insert data
$input = mysql_query("INSERT INTO peserta VALUES ('$nama','$nik','$hp','$email','$skema_sertifikasi','$tempat_uji_kompetensi','$recomendasi','$tanggal_terbit_sertifikat','$tanggal_lahir','$organisasi')");
// mengalihkan ke halaman index.php
if ($input) {
 ?>  
 <script language=javascript>document.location.href="index.php";</script>  
 <?php  
 }  
 else {  
 echo "ada kesalahan input data.!";  
 }  
 mysql_close();  
 ?>  
