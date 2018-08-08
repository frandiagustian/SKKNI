<?php 
//memanggil fungsi untuk angka terbilang
include "fungsi/fungsi.php";

?>
<html>
<head>

<!--
javascript voice -->
<script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script> <script type="text/javascript">
  
 </script>
                <title>Fungsi Aritmatika</title>
                <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
                <?php
// function isset() disini berfungsi untuk mengecek data, jadi apabila form di submit maka data akan tersimpan di masing-masing variabel.

                if(isset($_POST['hitung'])){

                                 // Variabel

                                $txt1 = $_POST['txt1'];

                                $txt2 = $_POST['txt2'];

                                $operator = $_POST['operator'];

                                                //untuk fungsi Switch case di sini untuk mengecek operator apa yang pilih sebelum data di submit.

                                                switch ($operator) {

                                                                case 'tambah':

                                                                                $hasil = $txt1+$txt2;

                                                                break;

                                                                case 'kurang':

                                                                                $hasil = $txt1-$txt2;

                                                                break;

                                                                case 'kali':

                                                                                $hasil = $txt1*$txt2;

                                                                break;

                                                                case 'bagi':

                                                                                $hasil = $txt1/$txt2;

                                                                break;                                  

                                                }

                }

                ?>

                <div class="kalkulator">

                                <h1 class="judul">FUNGSI ARITMATIKA</h1>

                                <form method="post" action="index.php" validate>                                      
												<center>
												<table>
												<tr>
												<td>
                                                <input type="text" name="txt1" class="txt" onkeyup='angka(this)' placeholder="Input Bilangan Pertama" required>
</td>
<td>
                                                <input type="text" name="txt2" class="txt" onkeyup='angka(this)'placeholder="Input Bilangan Kedua" required>
</td>
												
												</tr>
												</table>
                                                <select class="operator" name="operator">

                                                                <option value="tambah"> + </option>

                                                                <option value="kurang"> - </option>

                                                                <option value="kali"> * </option>

                                                                <option value="bagi"> / </option>

                                                </select>
												
                                                <input   type="submit" name="hitung" value="HITUNG" class="tombol" >

                                                <input type="submit" name="reset" value="RESET" class="tombol" formnovalidate>                                                                                                                                                                    

                                </form>
</center>
                                <?php if(isset($_POST['hitung'])){ ?>
<center>
<table>
<td><a>Skema Aritmatika</a>
                                                <input type="text" value="<?php echo $txt1; ?> <?php echo $operator; ?> <?php echo $txt2; ?>" class="txt">
</td>
												<td><a>Hasil</a>
												<input type="text" value="<?php echo $hasil; ?>" class="txt"> 
</td>
												<tr><td><a>Terbilang</a>
                                                <textarea class="txt"><?php echo terbilang($hasil); ?></textarea>
</td></tr>												
												<td><button onclick="play();">Play</button></td>
</table>
												</center>
<script>
function play (){
   responsiveVoice.speak(
    "<?php echo $hasil; ?>",
    "Indonesian Female",
    {
     pitch: 1, 
     rate: 1, 
     volume: 1
    }
   );
  }
</script>
<script language='javascript'>
function angka(a)
{
	if(!/^[0-9.]+$/.test(a.value))
	{
	a.value = a.value.substring(0,a.value.length-1000);
	}
}
</script>
                                <?php }else{ ?>

	<?php } ?>                                         

                </div>

</body>

 

</html>
