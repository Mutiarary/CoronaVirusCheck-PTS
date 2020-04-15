<?php 

	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Corona Virus Check</title>
    <link rel="shortcut icon" href="image/icon.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<form method="post" action="">
<body>
	<div class="container">
		<div class="navbar-header">
  		<nav class="navbar navbar-expand-lg navbar-light bg-light">
    		<a class="navbar-brand" href="#">Corona Virus Check</a>
  		</nav>
  		</div>
	</div>
	<br>
	<div class="container">
     <div class="col-lg-20">
            <div class="page-header">
              <h1 id="forms">Isi dan Pastikan Potensi Tertular Covid-19</h1>
	</div>
</div>
    <tr>
    	<br>
    	<td><b>A.POTENSI TERTULAR DILUAR RUMAH</b></td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>1. Apakah anda pergi keluar rumah?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="1" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="1" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>2. Apakah anda menggunakan transportasi umum?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="2" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="2" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>3. Apakah anda tidak menggunakan masker saat berkumpul dengan banyak orang?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="3" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="3" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>4. Apakah anda berjabat tangan dengan orang lain?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="4" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="4" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>5. Apakah anda tidak membersihkan tangan sebelum dan sesudah berkegiatan?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="5" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="5" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>6. Apakah anda menyentuh barang yang disentuh orang lain?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="6" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="6" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>7. Apakah anda tidak menjaga jarak dengan orang lain?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="7" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="7" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>8. Apakah anda makan diluar rumah(warung/restaurant)?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="8" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="8" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>9. Apakah anda tidak minum air hangat dan mencuci tangan setelah tiba ditujuan?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="9" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="9" value="0"/>Tidak</td>
    </tr>
    <tr>
    	<br>
    	<br>
    	<td>10. Apakah anda tinggal di lingkungan wilayah pasien tertular COVID-19?</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="10" value="1"/>Ya</td>
    </tr>
    <tr>
    	<br>
    	<td><input type="radio" name="10" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td><b>B.POTENSI TERTULAR DIDALAM RUMAH</b></td>
    </tr>
    <tr>
        <br>
        <br>
        <td>11. Apakah anda tidak memasang hand sanitizer di depan pintu rumah anda?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="11" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="11" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>12. Apakah anda tidak mencuci tangan dengan sabun setelah tiba di rumah?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="12" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="12" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>13. Apakah anda tidak menyediakan fasilitas kesehatan di rumah anda?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="13" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="13" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>14. Apakah anda tidak segera merendam pakaian dengan air hangat/sabun setelah bepergian?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="14" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="14" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>15. Apakah anda tidak segera mandi setelah bepergian?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="15" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="15" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>16. Apakah anda tidak mensosialisasikan check-list penilaian resiko pribadi ini kepada keluarga anda?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="16" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="16" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td><b>C.DAYA TAHAN TUBUH (IMUNITASI)</b></td>
    </tr>
    <tr>
        <br>
        <br>
        <td>17. Apakah dalam sehari anda tidak terkena cahaya matahari minimal 15 menit?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="17" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="17" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>18. Apakah anda tidak berjalan kaki/berolahraga minimal 30 menit?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="18" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="18" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>19. Apakah anda jarang meminum vitamin C & E lalu kurang tidur?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="19" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="19" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>20. Apakah anda berusia diatas 60 tahun?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="20" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="20" value="0"/>Tidak</td>
    </tr>
    <tr>
        <br>
        <br>
        <td>21. Apakah anda memiliki riwayat penyakit berat?</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="21" value="1"/>Ya</td>
    </tr>
    <tr>
        <br>
        <td><input type="radio" name="21" value="0"/>Tidak</td>
    </tr>
			
            <tr>
				<td colspan="4">
                <br>
                <br> 
					<center> 
						<button name="total" type="submit" class="btn btn-primary">Check Sekarang!</button>
					</center>
                <br>
                <br>
				</td>
				<td colspan="2">
					<?php  
						require 'config/koneksi.php';
						
						if (isset($_POST['total'])) {

						    $total = $_POST['1'] + $_POST['2'] + $_POST['3'] +  $_POST['4'] +  $_POST['5'] +  $_POST['6'] +  $_POST['7'] +  $_POST['8'] +  $_POST['9'] +  $_POST['10'] +  $_POST['11'] +  $_POST['12'] +  $_POST['13'] +  $_POST['14'] +  $_POST['15'] +  $_POST['16'] +  $_POST['17'] +  $_POST['18'] +  $_POST['19'] +  $_POST['20'] +  $_POST['21'];

						    if ($total >= 15) {
						  		$desk = "BERESIKO TINGGI tertular COVID-19";
						  } elseif ($total >= 8) {
						  		$desk = "BERESIKO SEDANG tertular COVID-19";
						  } elseif ($total >= 0) {
						  		$desk = "BERESIKO RENDAH tertular COVID-19";
						  } else {
						  		echo "Tidak Valid";
						  }

						  $sql = mysqli_query($konek, "INSERT INTO tb_responden (nama, usia, total, deks) VALUES('$_SESSION[nama]', '$_SESSION[usia]', '$total','$desk')");
							  if ($sql) {
							  	$_SESSION['desk'] = $desk;
								echo "<script>alert('Tunggu Sebentar');document.location.href='simpulan.php';</script>";
							  }else{
								echo $sql;
								echo mysqli_error($konek);
							  } 
						}	
					?>
				</td>
			</tr>
		</body>
	</form>
</html>