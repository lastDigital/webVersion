<?php
$vers = "1.01";
$year = "2022";
$DT = "Last Digital";
try {
    $db=new PDO("mysql:host=localhost; dbname=lastdt", 'root', '');
    
} catch (Exception $e) {
    echo $e->getMessage();
}

$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;
$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;
$dolar =  substr($usd_buying, 0, -5) ;
$euro = substr( $euro_buying, 0,-5);


?>