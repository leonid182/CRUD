<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db.php' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Create</title>
</head>
<body>
<div class="container">
    <form action="" method="post" class="df">
        <input type="number" name="number_id" placeholder="id">
        <input type="text" name="number_age"placeholder="Age">
        <input type="text" name="text_firstName"placeholder="FirstName">
        <input type="text" name="text_lastName"placeholder="LastName">
       
        <button class="form-add"></button>
    </form>


</div>

<div class="container error">
        <?php
    
    $id=$_POST['number_id']?? false;
    $number_id = $_POST['number_id']?? false;
    $number_age = $_POST['number_age']?? false;
    $text_firstName = $_POST['text_firstName']?? false;
    $text_lastName = $_POST['text_lastName']?? false;
    
    
    
     if($id && $number_id &&  $number_age && $text_firstName &&  $text_lastName){
        
        
        
           
      try{
           
            $sql = "INSERT INTO Customers(id,age,firstName,lastName) VALUES ('$number_id','$number_age','$text_firstName','$text_lastName');";
            $result = $connect -> query($sql);
                header("Location: /Site/index.php");
            
            
        

                
        } catch (Exception $e) {
            
            $a = $e->getMessage();
            if($a="Duplicate entry '' for key 'PRIMARY'"){
                echo 'Данный id уже занят, введите другой';
            }
            
            die();
        }
    };
    
    
    
    
    ?> 
 </div>



</body>
</html>