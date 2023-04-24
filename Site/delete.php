<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db.php' ;
$id = $_POST['id'] ?? false;

if($id){
    $sql = "DELETE FROM Customers WHERE id = $id";
    $result = $connect -> query($sql);
    header("Location: /Site/index.php");
}else {
    echo 'Delete operation has been failed';
}

