<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'store' ;
$connect = new mysqli($host, $username, $password, $db);

$sql = "DROP DATABASE IF EXISTS $db";
$sql = "CREATE TABLE delivery(
    `id` INT NOT NULL AUTO_INCREMENT ,
    `city_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`id`)

 )";
$connect -> query("UPDATE category SET  name = 'Часы' WHERE id=6");
$result = $connect -> query("SELECT *  FROM `category`");
$result = $connect -> query("INSERT INTO category SET id=1, name = 'Одежда';");
$connect -> query("DELETE FROM `category` WHERE name = 'Книги' OR name = 'Стихи' OR name = 'Кухня'
 

  ");
if($connect -> errno){
    echo $connect ->error;
    die();
};
                                                //fetch_row() возвращает массив из запроса(без ключей)
                                                //fetch_assoc() возвращает массив из запроса(в виде ассоциативногг массива)
                                                 //fetch_object() возвращает объект из запроса(в виде ассоциативногг массива)
        while($row = $result -> fetch_assoc()) : ?>
 <li><a href="path?id=<?= $row['id']?>"><?= $row['name']?></a></li>
       

<?php endwhile ?>   