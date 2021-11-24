<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $connection = mysqli_connect("localhost", "root", "", "prayandb");
    if(!$connection){
        echo"<script> 
            alert(\"database not connected\");
            window.location.href = \"signup.html\";
        </script>";
    }

    $insert_query = "INSERT INTO UserDetails (`FirstName`,`LastName`,`Email`,`DOB`,`Password`) VALUES ('$fname','$lname','$email','$dob', '$pass1')";
    if(mysqli_query($connection,$insert_query)){
        echo "Inserted";
        header("location:login.html");
    }
    else{
        echo "failed";
    }
?>