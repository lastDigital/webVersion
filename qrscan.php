<?php
ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://127.0.0.1/Lastdt/asset/css/config.css">
    <link rel="stylesheet" href="http://127.0.0.1/Lastdt/asset/css/style.css">
    <script src="http://127.0.0.1/Lastdt/asset/js/main.js"></script>
    <script src="http://127.0.0.1/Lastdt/asset/js/qrscan.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body >
  <?php include "asset/config/navbar.php";          ?>
  
  <center> <div class="container"> <h2>      <?php
    if ($_SESSION["lang"] == "tc") {
      echo"Kare Kod Okut";
    }
    elseif ($_SESSION["lang"] == "en") {
      echo"QR Code Read";
    }
    
    
    
    ?></h2>
      <button type="button" onclick="qrScan();" class="btn btn-outline-dark"> 
<?php
    if ($_SESSION["lang"] == "tc") {
      echo"Karekodu Okumaya Başla";
    }
    elseif ($_SESSION["lang"] == "en") {
      echo"Start Reading QR Code";
    }
    ?></button>

      <div class="ratio ratio-1x1">
      <center><video id="preview" style="width: 300px;height: 300px;"></video></center>
</div> 
      <select id="cameras"><?php
    if ($_SESSION["lang"] == "tc") {
      echo"Kamera Seç";
    }
    elseif ($_SESSION["lang"] == "en") {
      echo"Select Cam";
    }
    ?></select> 
      
      
</div>
</center>
<?php include "asset/config/footer.php";          ?>
</body>
</html>