<center><img id="DesktopLogo" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2" src="asset/img/Logo3.jpeg" width="170px" height="125px" alt="">
    <img id="mobileLogo" src="asset/img/Logo3.jpeg" width="170px" height="125px" alt=""></center>
<?Php include "asset/config/footer.php"; ?>
<div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRight2Label">
  <div class="offcanvas-header">
    <h5 id="offcanvasRight2Label">Menü</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="list-group">
  <a href="index.php" class="list-group-item list-group-item-action " aria-current="true">
    Ana Sayfa
  </a>
  <a href="qrscan.php" class="list-group-item list-group-item-action">Kare Kod Okut</a>
  <li class="list-group-item  list-group-item-action d-flex justify-content-between align-items-center">
Sepetim
    <span class="badge bg-danger rounded-pill">14</span>
  </li>


  <a href="wallet.php" class="list-group-item list-group-item-action ">Cüzdanım</a>
  <a href="account.php" class="list-group-item list-group-item-action">Hesabım</a>
  <center><hr> <p> &copy; <?php echo $year; ?> | <?php echo $DT; ?> <br>
   Version: <b><?php echo $vers; ?></b>
</p></center>
</div>
  </div>
</div>