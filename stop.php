<?php 
include "asset/config/header.php";       
include "asset/config/lang.php";
$db=new PDO("mysql:host=localhost; dbname=lastdt", 'root', '');
$sorgu=$db->prepare("SELECT * from uye");
$sorgu->execute();
$verial = $sorgu->fetch(PDO::FETCH_ASSOC);
$aktivasyon = $verial['aktivasyon'];

if ($aktivasyon == "a1") {
  header("Location:index.php");
}
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);     ?>

<body>
    <br>
<div class="container">
<div class="alert alert-danger" role="alert">
    
<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol> <h4 class="alert-heading"><?php if ($lang == "tr") {
      echo $stopphp[0];
  }  
  elseif ($lang == "en") {
    echo  $stopphp[1];
  }   
  else{
  echo  $stopphp[1];
  } ?> (erra0)</h4>
  <p><?php if ($lang == "tr") {
      echo $stopphp[2];
  }  
  elseif ($lang == "en") {
    echo  $stopphp[3];
  }   
  else{
  echo  $stopphp[3];
  } ?>
      <a href="help/en/view.php?ErrorId=erra0"><?php if ($lang == "tr") {
      echo $stopphp[4];
  }  
  elseif ($lang == "en") {
    echo  $stopphp[5];
  }   
  else{
  echo  $stopphp[5];
  } ?></a>
  </p>
  <hr>
  <p class="mb-0"><?php if ($lang == "tr") {
      echo $stopphp[6];
  }  
  elseif ($lang == "en") {
    echo  $stopphp[7];
  }   
  else{
  echo  $stopphp[7];
  } ?> <a href="help/supportticket.php"><?php if ($lang == "tr") {
    echo $stopphp[8];
}  
elseif ($lang == "en") {
  echo  $stopphp[9];
}   
else{
echo  $stopphp[9];
} ?></a></p>
  
</div>
<center><img src="asset/img/Logo3.jpeg" width="400px" alt=""></center>
<button hidden class="g-recaptcha" data-sitekey="6LdEIO0fAAAAAJ6XweVk46b_8Sk8hh289r_7gp1D" data-callback='onSubmit'>Submit</button>
</div>
</body>