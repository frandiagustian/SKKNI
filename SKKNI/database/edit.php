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
$alamat                          = $_POST['alamat'];
// query SQL untuk insert data
$input = mysql_query("update peserta set nama='$nama',
											hp='$hp',
											email='$email',
											skema_sertifikasi='$skema_sertifikasi',
											tempat_uji_kompetensi='$tempat_uji_kompetensi',
											rekomendasi='$recomendasi',
											tanggal_terbit_sertifikat='$tanggal_terbit_sertifikat',
											tanggal_lahir='$tanggal_lahir',
											organisasi='$organisasi' ,
											alamat='$alamat' 
											where 
											nik='$nik'") or die(mysql_error());
// mengalihkan ke halaman index.php
if ($input) {
	header('location:laporan/data_peserta.php?a=e');
	}
?>
