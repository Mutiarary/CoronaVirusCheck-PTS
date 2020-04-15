<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Corona Virus Check</title>
    <link rel="shortcut icon" href="image/icon.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        <table align="center">
            <div class="accordion" id="accordionExample">
                <div class="card" align="center">
                    <div class="card-header" id="headingTwo" align="center">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Corona Virus Check Menyatakan
                        </button>
                    </h2>
                    </div>
                    <div class="card-body">
                        <?php echo "Anda ".@$_SESSION['desk']; ?>
                        <br>
                        <br>
                        <?php echo "Tetap Jaga Kesehatan dan Kebersihan Tubuh Anda, Makan Makanan Bergizi Seimbang" ?>
                        <br>
                        <?php echo "Rajin Meminum Air Putih Serta Cuci Tangan Sebelum dan Sesudah Berkegiatan" ?>
                        <br>
                        <?php echo "Gunakan Masker Ketika Bepergian, Tetap Di Rumah Jika Tidak Berkepentingan" ?>
                        <br>
                        <br>
                        <?php echo "#STAYHEALTH - #STAYATHOME" ?>
                    </div>
                </div>
            </div>
    </table>
    <br>
    <center>
        <a href="login.php" class="btn btn-danger">KELUAR</a>
        </center>
</body>
</html>