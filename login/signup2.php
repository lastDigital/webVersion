<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
 include "../asset/config/header.php";
 include "../asset/config/access.php";
 if(!isset($_POST['basket']))
 {
     header("Location:signup.php");
 }
$eposta = htmlspecialchars($_POST['signupemail']);
$isim = htmlspecialchars($_POST['signupname']);
$telefon = htmlspecialchars($_POST['telefon']);
$il = htmlspecialchars($_POST['sehir']);
$sifrebir = htmlspecialchars($_POST['sifrebir']);
$sifreiki = htmlspecialchars($_POST['sifreiki']);
$ip_adresi = $_SERVER["REMOTE_ADDR"];
$zipcode =htmlspecialchars($_POST['zipc']);
$bakiye = "0.00";
$str = '1234567890ABCDEFGHIJKLMNOPRSTUVWXYZ';
$referans = substr(str_shuffle($str), 0, 6);
 


        $mailsor=$db->prepare(("SELECT * from uye where 

        eposta=:eposta 
        
        "));
        $mailsor->execute(array(
        
            'eposta'=>$eposta,
        
        ));
        $telefonsor=$db->prepare(("SELECT * from uye where 
        
        telefon=:telefon
        
        "));
        $telefonsor->execute(array(
        
            'telefon'=>$telefon,
        
        ));
        $mailvar=$mailsor->rowCount();
        $telefonvar=$telefonsor->rowCount();
       if ($mailvar > 0 && $telefonvar > 0) {
         header("Location:signup.php?err04=$lang");
       }
        elseif ($mailvar > 0 ) {
          header("Location:signup.php?err03=$lang");
        }
        elseif($telefonvar > 0){
          header("Location:signup.php?err02=$lang");
        }
        else {
          $sifre = crc32($sifrebir);
          $kullanicikaydet=$db->prepare("INSERT into uye SET 
          
            eposta=:eposta,
            isim=:isim,
            zipcode=:zipcode,
            telefon=:telefon,
            sifre=:sifre,
            sehir=:sehir,
            bakiye=:bakiye,
            durum=:durum,
            aktivasyon=:aktivasyon,
            RefId=:RefId,
            ip=:ip
        
          ");
        $insert=$kullanicikaydet->execute(array(
        
        'eposta'=>$eposta,
        'isim'=>$isim,
        'zipcode'=>$zipcode,
        'telefon'=>$telefon,
        'sifre'=>$sifre,
        'sehir'=>$il,
        'bakiye'=>$bakiye,
        'durum'=> "1",
        'aktivasyon'=>"a0",
        'RefId'=>$referans,
        'ip'=>$ip_adresi
        ));

       
        $sorgu=$db->prepare("SELECT * from uye WHERE eposta = '{$eposta}' ");
        $sorgu->execute();
        $verial = $sorgu->fetch(PDO::FETCH_ASSOC);
        $idal = $verial['id'];

        $mail = new PHPMailer(true);
        try {
            
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'hsnsbbh7135@gmail.com';                     
            $mail->Password   = 'fkbm2394';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    
        
           
            $mail->setFrom($eposta, $isim);
            $mail->addAddress($eposta, ' '. $isim. '');    
        
        
        
        
        
            $mail->isHTML(true);                                  
            $mail->Subject = 'Uyelik Aktivasyonu';
            $mail->Body    = '    <h1 lang="tr">LastDigital Üyeliğinizi Doğrulayın</h1> 
 
 <h3>Merhaba' . $isim . '</h3>


 Lastdigital üyeliğinizin aktif edilmesi için son bir adım kaldı.Lütfen üyeliğinizi aşağıdaki linke tıklayarak onaylayın. <br>
 <a href="http://127.0.0.1/LastDT/login/active.php?id='. $idal . '">http://127.0.0.1/LastDT/login/active.php?id='. $idal . '</a>
 
            '
           
          ;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
        
          if ($lang == "tr") {
            echo '<br>';
            echo '<div class=" container alert alert-success" role="alert">
            <h4 class="alert-heading">Üyelik Oluşturuldu</h4>
            <p>Üyeliğiniz oluşturuldu.Lütfen e-posta adresinize gelen aktivasyon linkine tıklayın.</p>
            <hr>
            <p class="mb-0">3 saniye içinde Giriş Sayfasına Yönlendiriliyorsunuz...</p>
          </div>';
          }
          elseif ($lang == "en") {
            echo '<br>';
            echo '<div class=" container alert alert-success" role="alert">
            <h4 class="alert-heading">Session Created</h4>
            <p>Your membership registration has been completed successfully.</p>
            <hr>
            <p class="mb-0">You are redirected to the login page in 3 seconds...</p>
          </div>';
          }
          header("Refresh:1.9; url=index.php");
        }
       
  

  
/*
$mailsor=$db->prepare(("SELECT * from uye where 

eposta=:eposta 

"));
$mailsor->execute(array(

    'eposta'=>$eposta,

));
$telefonsor=$db->prepare(("SELECT * from uye where 

telefon=:telefon

"));
$telefonsor->execute(array(

    'telefon'=>$telefon,

));
$mailvar=$mailsor->rowCount();
$telefonvar=$telefonsor->rowCount();
if ($mailvar > 0 ) {
    echo "<script>alert('E-Posta Adresi Kayıtlı.')</script>";
    header("Refresh: 1.9;url=signup.php");
}
elseif($telefonvar > 0){
  echo "<script>alert('Telefon Numarası Kayıtlı')</script>";
  header("Refresh: 1.9;url=signup.php");
}
else {
  $kullanicikaydet=$db->prepare("INSERT into uye SET 
  
    eposta=:eposta,
    isim=:isim,
    zipcode=:zipcode,
    telefon=:telefon,
    sifre=:sifre,
    sehir=:sehir,
    ip=:ip

  ");
$insert=$kullanicikaydet->execute(array(

'eposta'=>$eposta,
'isim'=>$isim,
'zipcode'=>$zipcode,
'telefon'=>$telefon,
'sifre'=>$sifrebir,
'sehir'=>$il,
'ip'=>$ip_adresi
));



  echo "<script>alert('Başarıyla Kayıt Oldunuz')</script>";
  header("Refresh: 1.9;url=index.php");
}*/