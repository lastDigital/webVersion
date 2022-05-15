<?php
include "../asset/config/access.php";
include "../asset/config/header.php";
// $gelen1 = $_GET['RefId'];
// $sorgu=$db->prepare("SELECT * from uye  WHERE REFF_CODE = '{$gelen1}'");
// $sorgu->execute();
// $verial = $sorgu->fetch(PDO::FETCH_ASSOC);
// $gelen2 =  $verial['REFF_CODE'];




$kaydet=$db->prepare("UPDATE uye set 


aktivasyon=:aktivasyon
WHERE id={$_GET['id']}


");

$update=$kaydet->execute(array(

'aktivasyon'=> "a1"
));
if($update){
    echo '<div class="container"><div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Üyeliğiniz Onaylandı. Giriş sayfasına yönlendiriliyorsunuz...
    </div>
  </div></div>';
 header("Refresh:3;url=index.php");
}
?>