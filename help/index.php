<?php


$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if ($language == "tr") {
    header("Location:tr/index");
}
elseif($language == "en") {
    header("Location:");
}
else{
    header("Location:/en");
}