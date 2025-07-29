<?php

    $mysqli_connect = new mysqli('localhost','root','','course_management');

    if($mysqli_connect->connect_errno){
        echo 'Faild to connect to the server :('.$mysqli_connect->connect_errno.')'.$mysqli_connect->connect_errno;
    }
   
    $sql = "SELECT * FROM employee";
    if( !$result = $mysqli_connect->query($sql)){
        echo "coudnt find the Db table";
        
    }else{
        echo "find something that you know"."we have".$result->num_rows." "."rows in the table";
    }
    
?>