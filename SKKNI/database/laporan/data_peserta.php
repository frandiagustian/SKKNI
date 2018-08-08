<title>Laporan</title>

<?php
include '../config/koneksi.php';
?>
     
					<center><br>
                    <table border="8" >
                      <thead>
					  <th colspan=11>DATA PESERTA SERTIFIKASI</th>					  
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NIK</th>
                          <th>HP</th>
                          <th>Email</th>
                          <th>Skema</th>
                          <th>Lokasi</th>
                          <th>Rekomendasi</th>
                          <th>Tanggal Terbit Sertifikat</th>
                          <th>Tanggal Lahir</th>
                          <th>Organisasi</th>
                      </thead>
                      <tbody>
					  
<?php		
$query_mysql = mysql_query("SELECT * FROM peserta order by tanggal_lahir")or die(mysql_error());
				$nomor = 1;
				while($row = mysql_fetch_array($query_mysql)){	 
		?>		
                        <tr>
				<td align='center'><?=$nomor?></td>
				<td><?=$row['0']?></td>
				<td><?=$row['1']?></td>
				<td size=16><?=$row['2']?></td>
				<td><?=$row['3']?></td>
				<td><?=$row['4']?></td>
				<td><?=$row['5']?></td>
				<td><?=$row['6']?></td>
				<td align='center'><?=$row['7']?></td>
				<td align='center'><?=$row['8']?></td>
				<td><?=$row['9']?></td>
                        </tr> 
						<?php
				$nomor++;	 }
				?>
                      </tbody>
                    </table>
					</center>
					          