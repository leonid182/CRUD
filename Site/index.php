<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db.php' ;



 $sql = "SELECT *  FROM `Customers`";

$result = $connect -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Document</title>
</head>

    <body>
    <div class="container">

   
    <!-- <button class='add' type="submit" onClick="location.href='/Site/create.php'">Добавить</button> -->
    <img class='add' title="Добавить"  onClick="location.href='/Site/create.php'" src="/icons/Button-Add-icon.png" alt="">
    <table>
            <thead >
                <tr >
                    <th>id</th>
                    <th>Age</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>buttons</th>
                </tr>
            </thead>
            <tbody style="border: 1px solid red">
            <?php while($row = $result->fetch_assoc()):?>
                <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['age']?></td>
                    <td><?= $row['firstName']?></td>
                    <td><?= $row['lastName']?></td>
                    <td class="table-justify">
                        
                        <form action="/Site/edit.php?id=<?=$row['id']?>" method="post">
                        <input type="hidden" value = "<?=$row['id']?>" name="id">
                        <button class="form-edit" title="Изменить"></button>
                        </form>
                        <form action="/Site/delete.php" method="post">
                        <input type="hidden" value = "<?=$row['id']?>" name="id">
                        <button class="form-delete" title="Удалить"></button>
                        </form>
                    </td>
                </tr>
                
             <?php endwhile ?>
      
            </tbody>
            
        </table>
        </div >
    </body>


</html>