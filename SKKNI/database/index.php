<?php 
include "config/function.php";

?>
<html>
<link rel="shortcut icon" href="Gambar/logo-kominfo-copy.jpg" type="image/x-icon">
<title>
SKKNI
</title>
<head>
<center><h1>INPUT PESERTA SERTIFIKASI</a></h1></center>
</head>
<body>
 
<form method="post"  action="simpan.php" validate>
<center>
<table border='1'>
<td>Nama</td>
<td><input type="text" name="nama" value="" required ></td>
<tr>
<td>NIK</td>
<td><input type="text" name="nik" onkeyup='angka(this)' placeholder="harus angka"  required ></td>
<tr>
<td>HP</td>
<td><input type="text" name="hp" onkeyup='angka(this)' placeholder="harus angka" required ></td>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="" required></td>
<tr>
<td>Skema Sertifikasi</td>
<td>
<select name="skema_sertifikasi" required>
                            <option value=""></option>
                            <option value="Programming">Programming</option>
                            <option value="Networking">Networking</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
						</td>
<tr>
<td>Tempat Uji Kompetensi</td>
<td><input type="text" name="tempat_uji_kompetensi" value="" required></td>
<tr>
<td>Rekomendasi</td>
<td><input type="text" name="recomendasi" value="" required></td>
<tr>
<td>Tanggal Terbit Sertifikat</td>
<td><input type="date" name="tanggal_terbit_sertifikat" value="" required></td>
<tr>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal_lahir" value="" required></td>
<tr>
<td>Organisasi</td>
<td><input type="text" name="organisasi" value="" required></td>
  </tr>
<tr><td colspan="2"><center><button type="submit" value="simpan">SIMPAN</button></center></td></tr>
<tr><td colspan="2"><center>
<a value="laporan"><a href="laporan/data_peserta.php" target='_new'>LAPORAN DATA PESERTA</a>
</center></td></tr>


</table>
<?php 
 if (isset($_GET['pesan'])){
		$pesan=mysql_real_escape_string($_GET['pesan']);
			 if($pesan=="yes"){
			echo"<div><i class='fa  fa-check'></i> <b> Data Disimpan !! </b></div>";
		}
	
 } 
?>
</form>
<div><img src="Gambar/SKKNI.jpg" width="230" height="130" /></div>
<br>
</center>
</body>

</html>