<?php

$vt_presenter="localhost";
$vt_user="root";
$vt_password="";
$vt_name="web_php_project";

$connect= mysqli_connect($vt_presenter,$vt_user,$vt_password,$vt_name);


if(!$connect){
    die("veritabanı bağlantı işlemi başarısız.".mysqli_connect.error());
}


?>