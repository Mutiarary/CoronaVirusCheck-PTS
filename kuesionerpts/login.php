<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php 
  session_start();
  require 'config/koneksi.php';
  if(isset($_POST['submit'])){
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['usia'] = $_POST['usia'];
    echo "<script>alert('Tunggu Sebentar');document.location.href='input.php';</script>";
  }
?>
<html>
  <head>
    <title>Corona Virus Check</title>
    <link rel="shortcut icon" href="image/icon.png" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
  <br>
  <br>
  <br>
  <br>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading"></h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Corona Virus Check</h2>
   <p>Silahkan Isi Data Diri Anda</p>
   </div>
    <form method="post" class="user" name="pendaftaran" action="">

        <div class="form-group">


            <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama">

        </div>

        <div class="form-group">

            <input type="number" name="usia" class="form-control form-control-user" placeholder="Usia">

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Isi Kuesioner</button>

    </form>
    </div>
<p class="botto-text"></p>
</div></div></div>


</body>
</html>
