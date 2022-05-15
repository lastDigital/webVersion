<?php  include "../asset/config/header.php";
include "../asset/config/access.php";
include "../asset/config/lang.php";

?>






<body>
<div class="container">
  <center><h2><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[0];
    break;
  case 'en':
   echo $login_signupphp[1];
}
?></h2></center>
<form class="row g-3" action="signup2.php" method="POST">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[2];
    break;
  case 'en':
   echo $login_signupphp[3];
}
?></label>
    <input type="email"  required name="signupemail" class="form-control uyeolinput" id="uyeolemail">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[4];
    break;
  case 'en':
   echo $login_signupphp[5];
}
?></label>
    <input type="text" required name="signupname" class="form-control uyeolinput" id="uyeolad">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[6];
    break;
  case 'en':
   echo $login_signupphp[7];
}
?></label>
    <div class="input-group"><div class="input-group-text">+90</div>
    <input type="tel" required class="form-control uyeolinput" name="telefon" id="inputAddress" maxlength="10" minlength="10">
</div>
    
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[8];
    break;
  case 'en':
   echo $login_signupphp[9];
}
?></label>
    <input type="password" class="form-control uyeolinput" id="sifrebir" name="sifrebir" required minlength="8">
    <div id="passwordHelpBlock1" class="form-text" style="color: red;">
  
  </div>
  </div> 
  <div class="col-6">
    <label for="inputCity" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[10];
    break;
  case 'en':
   echo $login_signupphp[11];
}
?></label>
    <input type="password"  class="form-control uyeolinput" name="sifreiki" id="sifreiki" required  minlength="8">
    <div id="passwordHelpBlock" class="form-text" style="color: red;">
  
</div>
  </div>
  <div class="col-md-4">
  <label for="inputZip" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[12];
    break;
  case 'en':
   echo $login_signupphp[13];
}
?></label>
   <select name="sehir" class="form-select" aria-label="Default select example" id="ilcode" required>
    <option value="01">Adana</option>
    <option value="02">Adıyaman</option>
    <option value="03">Afyonkarahisar</option>
    <option value="04">Ağrı</option>
    <option value="05">Amasya</option>
    <option value="06">Ankara</option>
    <option value="07">Antalya</option>
    <option value="08">Artvin</option>
    <option value="09">Aydın</option>
    <option value="10">Balıkesir</option>
    <option value="11">Bilecik</option>
    <option value="12">Bingöl</option>
    <option value="13">Bitlis</option>
    <option value="14">Bolu</option>
    <option value="15">Burdur</option>
    <option value="16">Bursa</option>
    <option value="17">Çanakkale</option>
    <option value="18">Çankırı</option>
    <option value="19">Çorum</option>
    <option value="20">Denizli</option>
    <option value="21">Diyarbakır</option>
    <option value="22">Edirne</option>
    <option value="23">Elazığ</option>
    <option value="24">Erzincan</option>
    <option value="25">Erzurum</option>
    <option value="26">Eskişehir</option>
    <option value="27">Gaziantep</option>
    <option value="28">Giresun</option>
    <option value="29">Gümüşhane</option>
    <option value="30">Hakkâri</option>
    <option value="31">Hatay</option>
    <option value="32">Isparta</option>
    <option value="33">Mersin</option>
    <option value="34">İstanbul</option>
    <option value="35">İzmir</option>
    <option value="36">Kars</option>
    <option value="37">Kastamonu</option>
    <option value="38">Kayseri</option>
    <option value="39">Kırklareli</option>
    <option value="40">Kırşehir</option>
    <option value="41">Kocaeli</option>
    <option value="42">Konya</option>
    <option value="43">Kütahya</option>
    <option value="44">Malatya</option>
    <option value="45">Manisa</option>
    <option value="46">Kahramanmaraş</option>
    <option value="47">Mardin</option>
    <option value="48">Muğla</option>
    <option value="49">Muş</option>
    <option value="50">Nevşehir</option>
    <option value="51">Niğde</option>
    <option value="52">Ordu</option>
    <option value="53">Rize</option>
    <option value="54">Sakarya</option>
    <option value="55">Samsun</option>
    <option value="56">Siirt</option>
    <option value="57">Sinop</option>
    <option value="58">Sivas</option>
    <option value="59">Tekirdağ</option>
    <option value="60">Tokat</option>
    <option value="61">Trabzon</option>
    <option value="62">Tunceli</option>
    <option value="63">Şanlıurfa</option>
    <option value="64">Uşak</option>
    <option value="65">Van</option>
    <option value="66">Yozgat</option>
    <option value="67">Zonguldak</option>
    <option value="68">Aksaray</option>
    <option value="69">Bayburt</option>
    <option value="70">Karaman</option>
    <option value="71">Kırıkkale</option>
    <option value="72">Batman</option>
    <option value="73">Şırnak</option>
    <option value="74">Bartın</option>
    <option value="75">Ardahan</option>
    <option value="76">Iğdır</option>
    <option value="77">Yalova</option>
    <option value="78">Karabük</option>
    <option value="79">Kilis</option>
    <option value="80">Osmaniye</option>
    <option value="81">Düzce</option>
   </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label uyeollabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[14];
    break;
  case 'en':
   echo $login_signupphp[15];
}
?></label>
    <input type="number" class="form-control uyeolinput" id="inputZip" name="zipc" max="81999" min="01000" required>
    <div id="emailHelp" class="form-text"> <a href="https://postakodu.ptt.gov.tr/" target="_blank" rel="noopener noreferrer"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[16];
    break;
  case 'en':
   echo $login_signupphp[17];
}
?></a></div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
      <a   data-bs-toggle="modal" data-bs-target="#exampleModal">
 <b><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[18];
    break;
  case 'en':
   echo $login_signupphp[19];
}
?></b><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[20];
    break;
  case 'en':
   echo $login_signupphp[21];
}
?>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[24];
    break;
  case 'en':
   echo $login_signupphp[25];
}
?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
      <?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[26];
    break;
  case 'en':
   echo $login_signupphp[27];
}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[28];
    break;
  case 'en':
   echo $login_signupphp[29];
}
?></button>
      </div>
    </div>
  </div>
</div>
      </label>
    </div> 
  </div> 
  <div class="col-12">
    <?php 
    if (@$_GET['err02'] == "tr") {
      echo "<p style='color: red;'>Telefon Numarası Kayıtlı. </p>";
    }
    elseif (@$_GET['err02'] == "en") {
      echo "<p style='color: red;'>Phone Number Registered.</p>";
    }
    if (@$_GET['err03'] == "tr") {
      echo "<p style='color: red;'>E-Posta Adresi Kayıtlı. </p>";
    }
    elseif (@$_GET['err03'] == "en") {
      echo "<p style='color: red;'>E-Mail Adress Registered. </p>";
    }
    if (@$_GET['err04'] == "tr") {
      echo "<p style='color: red;'>E-Posta ve Telefon Numarası Kayıtlı</p>";
    }
    elseif (@$_GET['err04'] == "en") {
      echo "<p style='color: red;'>E-Mail and Phone Number Registered</p>";
    }
    ?>
    <button type="submit" class="btn btn-primary" name="basket" id="gonder"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[22];
    break;
  case 'en':
   echo $login_signupphp[23];
}
?></button>
  </div> 
</form>
<script>
  $("#gonder").click(function(){
    if ($("#sifrebir").val()==$("#sifreiki").val()) {
      console.log(true);
    }
    else{
     document.getElementById('passwordHelpBlock1').innerHTML="Check İn Password";
    }
  });
  $("#gonder").click(function(){
    if ($("#sifrebir").val()==$("#sifreiki").val()) {
      console.log(true);
    }
    else{
     document.getElementById('passwordHelpBlock').innerHTML="Check İn Password";
    }
  });
</script>
    <hr>
    <p id="uyeolBtmn" title="Üye Olmak İçin Tıklayın"><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[30];
    break;
  case 'en':
   echo $login_signupphp[31];
}
?> <a href="index.php"><b><?php 
switch ($lang) {
  case 'tr':
   echo $login_signupphp[32];
    break;
  case 'en':
   echo $login_signupphp[33];
}
?></b></a>  </p>
</div>
</body>
</html>