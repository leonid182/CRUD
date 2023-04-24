<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'store' ;
$connect = new mysqli($host, $username, $password, $db);

if($connect -> errno){
    echo $connect ->error;
    die();
};



?>