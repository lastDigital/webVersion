<?php

include "../asset/config/access.php";
$email = htmlspecialchars($_POST['mail']);
$sifre = htmlspecialchars($_POST['sifre']);
$sifredogurla = crc32($sifre);
$birim = $_POST['parab'];
$sorgula=$db->prepare("SELECT * from uye where 
eposta=:eposta and
sifre=:sifre

");
$sorgula->execute(array(

'eposta'=>$email,
'sifre'=>$sifredogurla
));

$var=$sorgula->rowCount();
$row = $sorgula -> fetchAll(PDO::FETCH_ASSOC); 
foreach($row as $isimler) {

  }
if ($var >0) {
    
    ob_start();
    session_start();
    $_SESSION['login'] = "true";
    $_SESSION['mail'] = $email ;
    $_SESSION['userN'] = $isimler['isim'];
    $_SESSION['sehir'] = $isimler['sehir'];
    $_SESSION['zipC'] = $isimler['zipcode'];
    $_SESSION['telefon'] = $isimler['telefon'];
    $_SESSION['k_tarihi'] = $isimler['tarih'];
    $_SESSION['pass'] = $isimler['sifre'];
    $_SESSION['bakiye'] = $isimler['bakiye'];
    $_SESSION['durum'] = $isimler['durum'];
    $_SESSION['id'] = $isimler['id'];
    $_SESSION['birim'] = $birim; 
   if ($_SESSION['durum'] == "0") {
    header("Location:index.php?err06=$lang");
   }
   elseif ($_SESSION['durum'] == "1") {
    header("Location:../index.php");
  }
}
else {
    header("Location:index.php?err01=$lang");
} 