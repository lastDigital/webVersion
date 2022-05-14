<?php 
ob_start();
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location:login/index.php");
}
include "asset/config/header.php";

include "asset/config/access.php";
?>
<body>
 <?php include "asset/config/navbar.php" ?>
</body>
</html>