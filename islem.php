<?php

ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}
include "asset/config/header.php";
include "asset/config/access.php";
############## DESTEK TALEBİ ##############
if (isset($_POST['destek'])) {


$mail = $_POST['mail'];
$konu = $_POST['konu'];
$detay = $_POST['detaylar'];
$durum = "0";
$ip = $_SERVER["REMOTE_ADDR"];

$save=$db->prepare(" INSERT INTO destektalep SET
eposta=:eposta,
konu=:konu,
detaylar=:detaylar,
durum=:durum,
ip=:ip
");
$giris=$save->execute(array(

    'eposta'=>$mail,
    'konu'=>$konu,
    'detaylar'=>$detay,
    'durum'=>$durum,
    'ip'=>$ip

    )); 
    echo "<script>NotficationHelpService();</script>";
    header("Refresh:1.1;url=account.php");
}
############## HESAP SİLME ##############
if (isset($_POST['hesapsil'])) {
    $kaydet=$db->prepare("UPDATE uye set 


    durum=:durum
    WHERE id={$_SESSION['id']}
    
    
    ");
    
    $update=$kaydet->execute(array( 
    
    'durum'=> '0'
    ));
    echo "<script>DeletedAcc();</script>";
header("Refresh:1.9; url=login/logout.php");
}
############## ŞİFRE YENİLEME ##############
if (isset($_POST['sifreyenile'])) {
    $guvenli = crc32($_POST['aktifpass']);
    if ($guvenli == $_SESSION['pass']) {
        $kaydet=$db->prepare("UPDATE uye set 


sifre=:sifre
WHERE id={$_SESSION['id']}


");
 
$update=$kaydet->execute(array( 

'sifre'=> $_POST['yenibir']
));
echo "<script>alert(' Şifreniz Değiştirildi.')</script>";
header("Refresh:1.9; url=account.php");
    }

    else {
        echo "<script>alert('Aktif Şifreniz Hatalı.')</script>";
        header("Refresh:1.9; url=account.php");
    }
} 
############## BAKİYE YÜKLEME ##############
if (isset($_POST['bakiye_yukle'])) {
  
    $sorgula=$db->prepare("UPDATE uye set 


    bakiye=:bakiye
    WHERE id={$_SESSION['id']}
    
    
    ");

    $yenibakiye =  $_SESSION['bakiye'] + $_POST['para'] ;
    $update=$sorgula->execute(array(

        'bakiye'=> $yenibakiye
        ));
        echo '<br>';
        echo '<div class=" container alert alert-success" role="alert">
        <h4 class="alert-heading">İşlem Tamam!</h4>
        <p>Bakiye yükleme işleminiz başarılı bir şekilde tamamlandı.</p>
        <hr>
        <p class="mb-0">3 saniye içinde alışverişe devam edebilirsiniz.</p>
      </div>';



header("Refresh:3.0; url=wallet.php?err05=true");


}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    <style>
        body{
            background-color: #f1f2f3;
        }
    </style>
</head>
<body> <br><br><br><br><br>
    <center>
    <img src="asset/img/loading.gif" width="300px" height="300px" alt="">
    <h1>      <?php
    if ($_SESSION["lang"] == "tc") {
      echo"Yönlendiriliyorsunuz...";
    }
    elseif ($_SESSION["lang"] == "en") {
      echo"You are being redirected...";
    }
    
    
    
    ?></h1>
    </center>
</body>
</html>