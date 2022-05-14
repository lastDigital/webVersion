<?php 
ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}

include "asset/config/header.php";
include "asset/config/access.php";
$cerez = $_SESSION['mail'];
$tarih = $_SESSION['k_tarihi'];

?>


<body>

<div class="container">
<div class="row">
<div class="col-md-3" id="hesabim_pp"><div><img src="http://127.0.0.1/LastDT/asset/img/avatar.png" id="hesabim_img" height="100px" width="100px"></div>
<center><p id="hesabim_mail">Merhaba <b><?php echo $_SESSION['userN']?></b></p>
<p id="hesabim_mail">Bakiye:  <b><?php 
if ($_SESSION['birim'] == "tr") {
  echo $_SESSION['bakiye'] ;
  echo " ₺";
}
elseif ($_SESSION['birim'] == "usd") {
  echo $_SESSION['bakiye'] * $dolar;
  echo " $";
}
elseif ($_SESSION['birim'] == "eur") {
  echo $_SESSION['bakiye'] * $euro;
  echo " €";
}
else{
  echo "An Error Occurred While Transferring Data. 4XX";
}
?> </b></p></center>
<h2 id="hesabim_mail2"><center>Hızlı İşlemler</center></h2>
<button type="button"data-bs-toggle="modal" data-bs-target="#exampleModal1"  class="menu_islem btn btn-outline-info" style="width: 110px;">Destek</button>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Destek Talebi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="islem.php" method="post">
       <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> E-Posta Adresiniz</label>
  <input type="email" name="mail" required value="<?php echo $_SESSION['mail']?>" class="form-control" id="exampleFormControlInput1" >
  <label for="exampleFormControlInput1" class="form-label"> Telefon Numaranız</label>
  <input type="tel" name="tel" disabled required value="+90<?php echo $_SESSION['telefon']?>" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Destek Almak İstediğiniz Konu</label>
  <select class="form-select" aria-label="Default select example" name="konu" required>
  <option selected value="">Lütfen Konu Seçin</option>
  <option value="1">Ödeme Sorunuları</option>
  <option value="2">Hata Bildirimi & Öneri </option>
  <option value="3">Kötüye Kullanım</option>
  <option value="4">Diğer</option>
</select>
</div> 
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Detaylar</label>
  <textarea placeholder="Max 500 Karakter" name="detaylar" class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="500"></textarea>
</div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" name="destek" class="btn btn-primary" >Talep Oluştur</button></form>
      </div>
    </div>
  </div>
</div>
<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="  menu_islem btn btn-outline-success" style="font-size: 15px;">Şifre Değiştir</button>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Şifre Değiştir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"><form action="islem.php" method="post">
      <label for="exampleFormControlInput1" class="form-label"> Aktif Şifreniz</label>
  <input type="password" name="aktifpass" required  class="form-control" id="exampleFormControlInput" ><hr>
  <label for="exampleFormControlInput1" class="form-label"> Yeni Şifreniz</label>
  <input type="password" name="yenibir" required  class="form-control" id="exampleFormControlInput1" >
  <label for="exampleFormControlInput1" class="form-label"> Yeni Şifreniz Tekrar</label>
  <input type="password" name="yeniiki" required  class="form-control" id="exampleFormControlInput2" >
  <div id="passwordHelpBlock1" class="form-text" style="color: red;">
  
  </div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary" id="gonder" name="sifreyenile">Şifreyi Değiştir</button>
        <script>
  $("#gonder").click(function(){
    if ($("#exampleFormControlInput1").val()==$("#exampleFormControlInput2").val()) {
      console.log(true);
    }
    else{
   //  document.getElementById('passwordHelpBlock1').innerHTML="Şifreler Uyuşmuyor.";
    }
  });

</script></form>
      </div>
    </div>
  </div>
</div>
<a href="login/logout.php"><button type="button"  class="  menu_islem btn btn-outline-danger" style="width: 110px;">Çıkış Yap</button></a>
<a href="#"><button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop5" class="menu_islem btn btn-outline-dark" id="HesapBG" style="width: 110px; font-size: 11px;">Hesap Bilgilerim</button></a>

<div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hesap Bilgileriniz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        E-Posta Adresiniz: <b><?php echo $_SESSION['mail']?></b><br>
        Şehiriniz: <b><?php 

        if($_SESSION['sehir'] == "01"){echo "Adana";}
        elseif($_SESSION['sehir'] == "02"){echo "Adıyaman";}
        elseif($_SESSION['sehir'] == "03"){echo "Afyonkarahisar";}
        elseif($_SESSION['sehir'] == "04"){echo "Ağrı";}
        elseif($_SESSION['sehir'] == "05"){echo "Amasya";}
        elseif($_SESSION['sehir'] == "06"){echo "Ankara";}
        elseif($_SESSION['sehir'] == "07"){echo "Antalya";}
        elseif($_SESSION['sehir'] == "08"){echo "Artvin";}
        elseif($_SESSION['sehir'] == "09"){echo "Aydın";}
        elseif($_SESSION['sehir'] == "10"){echo "Balıkesir";}
        elseif($_SESSION['sehir'] == "11"){echo "Bilecik";}
        elseif($_SESSION['sehir'] == "12"){echo "Bingöl";}
        elseif($_SESSION['sehir'] == "13"){echo "Bitlis";}
        elseif($_SESSION['sehir'] == "14"){echo "Bolu";}
        elseif($_SESSION['sehir'] == "15"){echo "Burdur";}
        elseif($_SESSION['sehir'] == "16"){echo "Bursa";}
        elseif($_SESSION['sehir'] == "17"){echo "Çanakkale";}
        elseif($_SESSION['sehir'] == "18"){echo "Çankırı";}
        elseif($_SESSION['sehir'] == "19"){echo "Çorum";}
        elseif($_SESSION['sehir'] == "20"){echo "Denizli";}
        elseif($_SESSION['sehir'] == "21"){echo "Diyarbakır";}
        elseif($_SESSION['sehir'] == "22"){echo "Edirne";}
        elseif($_SESSION['sehir'] == "23"){echo "Elazığ";}
        elseif($_SESSION['sehir'] == "24"){echo "Erzincan";}
        elseif($_SESSION['sehir'] == "25"){echo "Erzurum";}
        elseif($_SESSION['sehir'] == "26"){echo "Eskişehir";}
        elseif($_SESSION['sehir'] == "27"){echo "Gaziantep";}
        elseif($_SESSION['sehir'] == "28"){echo "Giresun";}
        elseif($_SESSION['sehir'] == "29"){echo "Gümüşhane";}
        elseif($_SESSION['sehir'] == "30"){echo "Hakkari";}
        elseif($_SESSION['sehir'] == "31"){echo "Hatay";}
        elseif($_SESSION['sehir'] == "32"){echo "Isparta";}
        elseif($_SESSION['sehir'] == "33"){echo "Mersin";}
        elseif($_SESSION['sehir'] == "34"){echo "İstanbul";}
        elseif($_SESSION['sehir'] == "35"){echo "İzmir";}
        elseif($_SESSION['sehir'] == "36"){echo "Kars";}
        elseif($_SESSION['sehir'] == "37"){echo "Kastamonu";}
        elseif($_SESSION['sehir'] == "38"){echo "Kayseri";}
        elseif($_SESSION['sehir'] == "39"){echo "Kırklareli";}
        elseif($_SESSION['sehir'] == "40"){echo "Kırşehir";}
        elseif($_SESSION['sehir'] == "41"){echo "Kocaeli";}
        elseif($_SESSION['sehir'] == "42"){echo "Konya";}
        elseif($_SESSION['sehir'] == "43"){echo "Kütahya";}
        elseif($_SESSION['sehir'] == "44"){echo "Malatya";}
        elseif($_SESSION['sehir'] == "45"){echo "Manisa";}
        elseif($_SESSION['sehir'] == "46"){echo "Kahramanmaraş";}
        elseif($_SESSION['sehir'] == "47"){echo "Mardin";}
        elseif($_SESSION['sehir'] == "48"){echo "Muğla";}
        elseif($_SESSION['sehir'] == "49"){echo "Muş";}
        elseif($_SESSION['sehir'] == "50"){echo "Nevşehir";}
        elseif($_SESSION['sehir'] == "51"){echo "Niğde";}
        elseif($_SESSION['sehir'] == "52"){echo "Ordu";}
        elseif($_SESSION['sehir'] == "53"){echo "Rize";}
        elseif($_SESSION['sehir'] == "54"){echo "Sakarya";}
        elseif($_SESSION['sehir'] == "55"){echo "Samsun";}
        elseif($_SESSION['sehir'] == "56"){echo "Siirt";}
        elseif($_SESSION['sehir'] == "57"){echo "Sinop";}
        elseif($_SESSION['sehir'] == "58"){echo "Sivas";}
        elseif($_SESSION['sehir'] == "59"){echo "Tekirdağ";}
        elseif($_SESSION['sehir'] == "60"){echo "Tokat";}
        elseif($_SESSION['sehir'] == "61"){echo "Trabzon";}
        elseif($_SESSION['sehir'] == "62"){echo "Tunceli";}
        elseif($_SESSION['sehir'] == "63"){echo "Şanlıurfa";}
        elseif($_SESSION['sehir'] == "64"){echo "Uşak";}
        elseif($_SESSION['sehir'] == "65"){echo "Van";}
        elseif($_SESSION['sehir'] == "66"){echo "Yozgat";}
        elseif($_SESSION['sehir'] == "67"){echo "Zonguldak";}
        elseif($_SESSION['sehir'] == "68"){echo "Aksaray";}
        elseif($_SESSION['sehir'] == "69"){echo "Bayburt";}
        elseif($_SESSION['sehir'] == "70"){echo "Karaman";}
        elseif($_SESSION['sehir'] == "71"){echo "Kırıkkale";}
        elseif($_SESSION['sehir'] == "72"){echo "Batman";}
        elseif($_SESSION['sehir'] == "73"){echo "Şırnak";}
        elseif($_SESSION['sehir'] == "74"){echo "Bartın";}
        elseif($_SESSION['sehir'] == "75"){echo "Ardahan";}
        elseif($_SESSION['sehir'] == "76"){echo "Iğdır";}
        elseif($_SESSION['sehir'] == "77"){echo "Yalova";}
        elseif($_SESSION['sehir'] == "78"){echo "Karabük";}
        elseif($_SESSION['sehir'] == "79"){echo "Kilis";}
        elseif($_SESSION['sehir'] == "80"){echo "Osmaniye";}
        elseif($_SESSION['sehir'] == "81"){echo "Düzce";}
        
        
        ?></b><br>
        Telefon Numaranız: <b>+90<?php echo $_SESSION['telefon']?></b><br>
        Kayıt Olma Tarihiniz: <b><?php 
        

$yil1 = $tarih[0] ;
$yil2 = $tarih[1] ;
$yil3 = $tarih[2] ;
$yil4 = $tarih[3] ;
$ay1 = $tarih[5];
$ay2 = $tarih[6];
if ($ay1 == "0" || $ay2 == "1") {
  echo "Ocak";
}
elseif ($ay1 == "0" || $ay2 == "2") {
 echo "Şubat";
}
elseif ($ay1 == "0" || $ay2 == "3") {
  echo "Mart";
}
elseif ($ay1 == "0" || $ay2 == "4") {
  echo "Nisan";
 }
elseif ($ay1 == "0" || $ay2 == "5") {
  echo "Mayıs";
 }
elseif ($ay1 == "0" || $ay2 == "6") {
  echo "Haziran";
 }
elseif ($ay1 == "0" || $ay2 == "7") {
  echo "Temmuz";
 }
 elseif ($ay1 == "0" || $ay2 == "8") {
  echo "Ağustos";
 }
 elseif ($ay1 == "0" || $ay2 == "9") {
  echo "Eylül";
 }
 elseif ($ay1 == "1" || $ay2 == "0") {
  echo "Ekim";
 } 
 elseif ($ay1 == "1" || $ay2 == "1") {
  echo "Kasım";
 } 
 elseif ($ay1 == "1" || $ay2 == "2") {
  echo "Aralık";
 } 
 echo "&nbsp;";
echo $yil1;
echo $yil2;
echo $yil3;
echo $yil4;
?></b><br>
Kullanıcı Numaranız: <b><?php echo $_SESSION['id']?></b><br>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
        <button type="submit" name="hesapsil" disabled class="btn btn-danger">Hesabımı Sil</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-md-9" id="menu_icerik">
    <hr id="ayirici_menu">

    <h2 id=""><center>Duyurular</center></h2>
<center>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item ">
      <img src="asset/img/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="asset/img/slider2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/img/slider1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</center>    
<hr>
<CEnter><h2>Genel Ayarlar</h2></CEnter>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
  <label class="form-label" for="flexSwitchCheckCheckedDisabled">Bildirimler</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled"  disabled>
  <label class="form-label" for="flexSwitchCheckCheckedDisabled">Oturum'u Açık Tut </label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled"  disabled>
  <label class="form-label" for="flexSwitchCheckCheckedDisabled">Koyu Tema</label>
</div>
<hr>
<h2 id=""><center>Sıkça Sorulan Sorular</center></h2>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div><hr>

</div>
</div>
</div>




</body>
</html>