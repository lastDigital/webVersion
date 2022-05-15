<?php
session_start();
ob_start();
session_destroy();
header("Location:index.php");
ob_end_flush();
?>