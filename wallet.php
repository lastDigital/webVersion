<?php 
ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}
	



include "asset/config/header.php";
include "asset/config/access.php";
$cerez = $_SESSION['mail'];
echo "Bakiyeniz: ";
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
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bakiye Yükle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
    <form action="islem.php" method="POST" name="bakiye_yukle">
    <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">En Fazla 1000 ₺ Yükleyebilirsiniz</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">₺</span>
      <input type="number" class="form-control" name="para" id="validationCustomUsername" aria-describedby="inputGroupPrepend" max="1000" required>
      <div class="invalid-feedback">
        Yüklemek İstediğiniz Tutar
      </div>
    </div>
  </div>

 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        <button  type="submit" name="bakiye_yukle" class="btn btn-primary">Yükle</button>   </form>
      </div>
    </div>
  </div>
</div>
</body>
