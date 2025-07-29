<?php

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=course_management','root','');
    }
 catch(PDOException $e){
    echo "WE are in trouble".$e->getMessage().'br';
 }
 $stmt = $pdo->prepare("SELECT* FROM employee");
 $stmt->execute();
 echo "number of rows are : ".$stmt->rowCount();