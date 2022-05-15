<?php 
ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}
	



include "asset/config/header.php";
include "asset/config/access.php"; 
include "asset/config/lang.php";
 $cerez = $_SESSION['mail'];


?> 
<?php include "asset/config/navbar.php";          ?>
<div class="container"> <center>
  <h2><?php    switch ($lang) {
     case 'tr':
      echo $walletphp[0];
       break;
     case 'en':
      echo $walletphp[1]; 
   } ?></h2></center>
  <hr>
  <!-- Button trigger modal --> 
<?php 
if (@$_GET['err05']) {
         echo' <div class="alert alert-danger d-flex align-items-center" role="alert">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Danger:">
           <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
         </svg>
         <div>
           <b>Bakiyeniz Güncel Değil.<br> </b> Görünüşe göre kısa süre önce bakiye yüklemesi yaptınız. Bakiyenizin güncellemek için <a href="login/logout.php">oturumunuzu yenileyin.</a> 
           
         </div>
       </div>';
}

?>
  <h3><?php    switch ($lang) {
     case 'tr':
      echo $walletphp[2];
       break;
     case 'en':
      echo $walletphp[3]; 
   } ?>  <?php 
  
  
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
    echo $error;
  }
  
  
  ?> </h3>
  <p></p>
<button type="button" class="btn btn-outline-dark"  data-bs-toggle="modal" data-bs-target="#exampleModal">
<?php    switch ($lang) {
     case 'tr':
      echo $walletphp[4];
       break;
     case 'en':
      echo $walletphp[5]; 
   } ?>
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php    switch ($lang) {
     case 'tr':
      echo $walletphp[4];
       break;
     case 'en':
      echo $walletphp[5]; 
   } ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
    <form action="payment/securepay.php" method="POST" name="bakiye_yukle">
    <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label"><?php    switch ($lang) {
     case 'tr':
      echo $walletphp[6];
       break;
     case 'en':
      echo $walletphp[7]; 
   } ?>   <?php 
  
  
  if ($_SESSION['birim'] == "tr") {

    echo " ₺";
  }
  elseif ($_SESSION['birim'] == "usd") {

    echo " $";
  }
  elseif ($_SESSION['birim'] == "eur") {

    echo " €";
  }
  else{
    echo $error;
  }
  
  
  ?> <?php    switch ($lang) {
    case 'tr':
     echo $walletphp[8];
      break;
  } ?></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">  <?php 
  
  
  if ($_SESSION['birim'] == "tr") {

    echo " ₺";
  }
  elseif ($_SESSION['birim'] == "usd") {

    echo " $";
  }
  elseif ($_SESSION['birim'] == "eur") {

    echo " €";
  }
  else{
    echo $error;
  }
  
  
  ?></span>
     <input type="number" class="form-control" name="para" id="validationCustomUsername" aria-describedby="inputGroupPrepend" max="1000" required>
      <div class="invalid-feedback">
      <?php    switch ($lang) {
     case 'tr':
      echo $walletphp[10];
       break;
     case 'en':
      echo $walletphp[11]; 
   } ?>
      </div>
    </div>
  </div>

 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php    switch ($lang) {
     case 'tr':
      echo $walletphp[12];
       break;
     case 'en':
      echo $walletphp[13]; 
   } ?></button>
        <button  type="submit" name="bakiye_yukle" class="btn btn-outline-dark"><?php    switch ($lang) {
     case 'tr':
      echo $walletphp[14];
       break;
     case 'en':
      echo $walletphp[15]; 
   } ?></button> </form> 
      </div>
    </div>
  </div>
</div>
<?php include "asset/config/footer.php";          ?>
</body>
