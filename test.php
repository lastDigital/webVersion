<?php
try {
    $db=new PDO("mysql:host=localhost; dbname=lastdt", 'root', '');
    
} catch (Exception $e) {
    echo $e->getMessage();
}
        $sorgu=$db->prepare("SELECT * from uye ");
        $sorgu->execute();
        $verial = $sorgu->fetch(PDO::FETCH_ASSOC);
        $idal = $verial['id'];
        echo $idal;