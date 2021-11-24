<?php
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $connection = mysqli_connect('localhost',"root",'', "prayandb");
    if(!$connection){
          echo"error";
    }

    $fetch_query = "SELECT * FROM UserDetails WHERE `Email` = $email AND `Password` = $pass";
    $data = mysqli_query($connection,$fetch_query);
    if(mysqli_num_rows($data)>0){
        echo"login success";
        header("refresh:2; url=index.html");
    }
    else{
        echo "error";
    }
?>