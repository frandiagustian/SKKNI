<?php 
include "config/function.php";

?>
<html>
<link rel="shortcut icon" href="Gambar/logo-kominfo-copy.jpg" type="image/x-icon">
<title>
SKKNI
</title>
<head>
</head>
<body>
<form method="post"  action="simpan.php" validate>
<center><br>
<table border='0'>
<td colspan='2'><div><img src="Gambar/SKKNI.jpg" width="230" height="130" /></div></td>
<td colspan='5'><center><h1>INPUT PESERTA SERTIFIKASI</h1></center></td>
<td colspan='2'><div><img src="Gambar/logo-kominfo-copy.jpg" width="230" height="130" /></div></td>
<tr>
<td height=30 colspan=8></td>
</tr>
<tr>
<td width=15></td>
<td><a value="laporan"><a href="laporan/data_peserta.php">DATA PESERTA</a></td>
<td>Nama</td>
<td><input type="text" name="nama" value="" required ></td>
<td width=20></td>
<td>Tempat Uji Kompetensi</td>
<td><input type="text" name="tempat_uji_kompetensi" value="" required></td>
<td colspan='2'></td>
</tr>
<tr>
<td></td>
<td><a value="laporan"><a href="laporan/data_peserta.php">LAPORAN</a></td>
<td>NIK</td>
<td><input type="text" name="nik" onkeyup='angka(this)' placeholder="harus angka"  required ></td>
<td></td>
<td>Rekomendasi</td>
<td><input type="text" name="recomendasi" value="" required></td>
<td></td>
<tr>
<td></td>
<td></td>
<td>HP</td>
<td><input type="text" name="hp" onkeyup='angka(this)' placeholder="harus angka" required ></td>
<td></td>
<td>Tanggal Terbit Sertifikat</td>
<td><input type="date" name="tanggal_terbit_sertifikat" value="" required></td>
<td></td>
<tr>
<td></td>
<td></td>
<td>Email</td>
<td><input type="text" name="email" value="" required></td>
<td></td>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal_lahir" value="" required></td>
<td></td>
<tr>
<td></td>
<td></td>
<td>Skema Sertifikasi</td>
<td>
<select name="skema_sertifikasi" required>
                            <option value=""></option>
                            <option value="Programming">Programming</option>
                            <option value="Networking">Networking</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
						</td>
						<td></td>
						<td>Organisasi</td>
<td><input type="text" name="organisasi" value="" required></td>
<td></td>
<tr>
<td></td>
<td></td>
<td>Alamat</td>
<td><input type="text" name="alamat" value="" required></td>
<td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
<td></td>
<td></td>
</tr>
</table>
<?php 
 if (isset($_GET['pesan'])){
		$pesan=mysql_real_escape_string($_GET['pesan']);
			 if($pesan=="yes"){
			echo"<div><i class='fa  fa-check'></i> <b> Data Disimpan !! </b></div>";
		}
	
 } 
?>
</center>
</body>

</html>