 <?php

require_once $_SERVER['DOCUMENT_ROOT'].'/db.php' ;



if(isset($_GET['id'])){
    $list_id = $_GET['id'];
    $query = "SELECT * FROM `Customers` WHERE `id`=$list_id";
    $result = $connect -> query($query);
     $row = $result->fetch_object();
    
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <form action="" method="post" class="df">
        <input type="hidden" name="number_id" placeholder="id"value = <?=$row->id?>>
        <input type="number" name="number_age"placeholder="Age to change"value = <?=$row->age?> >
        <input type="text" name="text_firstName"placeholder="Name to change" value = <?=$row->firstName?>>
        <input type="text" name="text_lastName"placeholder="Sirname to change"value = <?=$row->lastName?>>
       
        <button class="form-edit"></button>
    </form>
</div>

<div class="container">

<div class="error">
    <?php
    
    $id=$_POST['number_id']?? false;
    
    
    
    if($id){
        $number_id = $_POST['number_id'];
        $number_age = $_POST['number_age'];
        $text_firstName = $_POST['text_firstName'];
        $text_lastName = $_POST['text_lastName'];
       if(!empty($number_age) && !empty($text_firstName) && !empty($text_lastName)){
            $sql = "UPDATE `Customers` SET  `age`='$number_age', firstName ='$text_firstName', lastName='$text_lastName' WHERE `id`='$number_id'"  ;
            $result = $connect -> query($sql);
            header("Location: /Site/index.php");
        }else{
            echo'Заполните все поля';
        }
    };
    
    
    
    
    ?> 
</div>
</div>
    
</body>
</html>


