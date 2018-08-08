<?php
include '../config/koneksi.php';
$id = $_GET['id'];

?>
     						
<?php 
 if (isset($_GET['a'])){
		$pesan=mysql_real_escape_string($_GET['a']);
			 if($pesan=="y"){
			echo"<center><div><b> Data Dihapus !! </b></div></center>";
	}else	 if($pesan=="e"){
			echo"<center><div><b> Data berhasil Diedit !! </b></div></center>";
		}
 } 
?>	
                    <table border="5" align="center">
                      <thead bgcolor="black"  style="color:white">
					  <tr>
					  <td colspan=13><h1><center><br>DATA PESERTA SERTIFIKASI</h1></center></td>
					  </tr>
                        <tr >
                          <th width="20px">No </th>
                          <th width="140px">Nama </th>
                          <th width="180px">NIK </th>
                          <th width="80px">tanggal lahir </th>
                          <th width="100px">No Handphone </th>
                          <th width="120px">Email </th>
                          <th width="100px">Skema </th>
                          <th width="120px">Tempat Test </th>
                          <th width="120px">rekomendasi  </th>
                          <th width="180px">organisasi </th>
                          <th width="80px">tanggal Terima sertifikat </th>
                          <th width="80px">alamat</th>
                          <th width="20px">aksi </th>
                      </thead>
                      <tbody>
					  
<?php		
$query_mysql = mysql_query("SELECT * FROM peserta where skema_sertifikasi='$id' or rekomendasi ='$id'")or die(mysql_error());
				$nomor = 1;
				while($row = mysql_fetch_array($query_mysql)){	 
		?>		
                        <tr>
				<td align='center'><?=$nomor?></td>
				<td><?=ucwords(strtolower($row['0']))?></td>
				<td><?=$row['1']?></td>
				<td><?=$row['8']?></td>
				<td><?=$row['2']?></td>
				<td><?=$row['3']?></td>
				<td><?=$row['4']?></td>
				<td><?=$row['5']?></td>
				<td><?=$row['6']?></td>
				<td><?=$row['9']?></td>
				<td><?=$row['10']?></td>
				<td align="center"><?=$row['7']?></td>
				<td align="center">	
			<button onclick="if(confirm('Mau ke form Edit data???')){ location.href='../edit_data.php?id=<?php echo $row['1']; ?>' }"  class="btn btn-danger btn-sm"> Edit</button> 
			<button onclick="if(confirm('Hapus data???')){ location.href='../_hapus_data.php?id=<?php echo $row['1']; ?>' }"  class="btn btn-danger btn-sm"> Hapus</button> 
			
				</td>
                        </tr> 
						<?php
				$nomor++;	 }
				?>
                        <tr>
						<td align="center" colspan="12">Total :  <?=$nomor-1?> </td>
						<td><a value="kembali" href="../laporan/data_peserta.php">KEMBALI</a></td>
                        </tr> 
                      </tbody>
                    </table>        
				
						