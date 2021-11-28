<?php

    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $connection = mysqli_connect('localhost',"root",'', "prayandb");
    if(!$connection){
        echo"error";
    }
    
    $fetch_query = "SELECT `password` FROM `userDetails` WHERE `Email`='$email' AND `Password` = '$pass'";
    $data = mysqli_query($connection,$fetch_query);
    session_start();
    if (isset($_SESSION['email'])) {
        echo '<script>alert("Login Success")</script>';
        echo '<script>window.location.href="./index.php"</script>';
    }else{
        if(mysqli_num_rows($data)>0){
            $_SESSION['email'] = $email;
            header("location:./login.php");
        }
        else{
            echo '<script>alert("User Not Found")</script>';
            echo '<script>window.location.href="./login.html"</script>';
        }
    }
