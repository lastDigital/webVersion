<?php 
ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}
	

if (!isset($_POST['bakiye_yukle'])) {
  header("Location:../index.php");
}


include "../asset/config/header.php";
include "../asset/config/access.php";?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Satın Alım</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

     

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../asset/img/Logo3.jpeg" alt="" width="72" height="57">
      <h2>Güvenli Ödeme</h2>
      <p class="lead">Sepetinizde en az bir adet tek başına satılabilir ürün bulunmalıdır.Aksi takdirde sipariş onaylanmayacaktır.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Sipariş Özeti</span>
          
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Bakiye Yükleme</h6>
              <small class="text-muted"></small>
            </div>
            <span class="text-muted"><?php echo $_POST['para']; ?> <?php
            
            
            
            if ($_SESSION['birim'] == "tr") {
   
                  echo "₺";
                }
                elseif ($_SESSION['birim'] == "usd") {
                 
                  echo "$";
                }
                elseif ($_SESSION['birim'] == "eur") {
              
                  echo "€";
                }
                else{
                  echo "An Error Occurred While Transferring Data. 4XX";
                }
              
              
              ?></span>
          </li>
          <!-- <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li> -->
          <li class="list-group-item d-flex justify-content-between">
            <span>Toplam  (<?php  if ($_SESSION['birim'] == "tr") {
 
    echo "₺";
  }
  elseif ($_SESSION['birim'] == "usd") {
   
    echo "$";
  }
  elseif ($_SESSION['birim'] == "eur") {

    echo "€";
  }
  else{
    echo "An Error Occurred While Transferring Data. 4XX";
  }?>)</span>
            <strong><?php echo $_POST['para']; ?> <?php
            
            
            
          if ($_SESSION['birim'] == "tr") {
 
                echo "₺";
              }
              elseif ($_SESSION['birim'] == "usd") {
               
                echo "$";
              }
              elseif ($_SESSION['birim'] == "eur") {
            
                echo "€";
              }
              else{
                echo "An Error Occurred While Transferring Data. 4XX";
              }
            
            
            ?></strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promosyon Kodu">
            <button type="submit" class="btn btn-secondary" disabled>Uygula</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate action="../islem.php"  name="bakiye_yukle" method="POST">
          <div class="row g-3">
<hr class="my-4">

          <h4 class="mb-3">Kart Bilgileri</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Kredi Kartı Kartı</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" disabled>
              <label class="form-check-label" for="debit">Ön Ödemeli Kart</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input"disabled >
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Kart Sahibi</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Tüm Alanları Doldurun</small>
              <div class="invalid-feedback">
               
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Kart Numarası</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Son Kullanma Tarihi</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">
          <input type="hidden" name="para" value="<?php echo $_POST['para'];?>">
          <button class="w-100 btn btn-primary btn-lg" name="bakiye_yukle" type="submit">Ödemeyi Onayla</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 |  LastDigital</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Gizlilik Politikası</a></li>
      <li class="list-inline-item"><a href="#">KVKK</a></li>
      <li class="list-inline-item"><a href="#">Yardım</a></li>
    </ul>
  </footer>
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
