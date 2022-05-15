<?php 

ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}
if ($_SESSION['durum'] == "0") {
    header("Location:login/logout.php");
}
include "asset/config/header.php";
include "asset/config/lang.php";
include "asset/config/access.php";

?>
<body>
 <?php include "asset/config/navbar.php" ?>
 <?php include "asset/config/footer.php" ?>
</body>
</html>
 