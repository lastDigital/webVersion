

<?php
  include "../asset/config/header.php";
  include "../asset/config/lang.php";
  include "../asset/config/access.php";
    

?>
<body>
<div class="container">
    <center><h2><?php    switch ($lang) {
     case 'tr':
      echo $login_indexphp[0];
       break;
     case 'en':
      echo $login_indexphp[1]; 
   } ?></h2></center>
<form action="login.php" method="POST">
  <div class="mb-3">
      
    <label for="exampleInputEmail1" class="form-label girislabel" id="emaillabel"><?php    switch ($lang) {
     case 'tr':
      echo $login_indexphp[2];
       break;
     case 'en':
      echo $login_indexphp[3];
   } ?></label>
    <input type="email" name="mail" class="form-control girisinput" id="girisemail" aria-describedby="emailHelp" title="Requrired" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label girislabel" id="sifrelabel"><?php    switch ($lang) {
     case 'tr':
      echo $login_indexphp[4];
       break;
     case 'en':
      echo $login_indexphp[5];
   } ?></label>
    <input type="password" name="sifre" class="form-control girisinput" id="girissifre" title="Lütfen Şifrenizi Girin" required>
  </div>
  <select class="form-select" aria-label="Default select example" name="parab" required>
  <option selected value=""><?php    switch ($lang) {
     case 'tr':
      echo $login_indexphp[6];
       break;
     case 'en':
      echo $login_indexphp[7];
   } ?></option>
  <option value="tr"> TRY  (₺)</option>
  <option value="usd">USD ($)</option>
  <option value="eur">EUR (€)</option>
</select>  <br>

<?php 
if (@$_GET['err01'] == "tr") {
  echo "<p style='color: red;'>E-Posta Adresi veya şifre hatalı</p>";
}
elseif (@$_GET['err01'] == "en") {
  echo "<p style='color: red;'>E-Mail address or Password Incorrect</p>";
}
if (@$_GET['err06'] == "tr") {
  echo "<p style='color: red;'>Hesabınız Askıya Alındı</p>";
}
elseif (@$_GET['err06'] == "en") {
  echo "<p style='color: red;'>Account Has Been Suspended</p>";
} 

?>
  <button type="submit" class="btn btn-info" id="girisbutton" name="girisyap"><?php    switch ($lang) {
     case 'tr':
      echo $login_indexphp[14];
       break;
     case 'en':
      echo $login_indexphp[15];
   } ?></button>
</form>
    <hr> 

    <p id="uyeolBtmn" title=""><?php    switch ($lang) {
     case 'tr':
      echo $login_indexphp[16];
       break;
     case 'en':
      echo $login_indexphp[17];
   } ?><a href="signup.php"><b> <?php    switch ($lang) {
    case 'tr':
     echo $login_indexphp[18];
      break;
    case 'en':
     echo $login_indexphp[19];
  } ?></b></a>  </p>
</div>
</body>
</html>