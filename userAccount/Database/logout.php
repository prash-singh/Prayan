<?php
session_start();
if (isset($_SESSION['email'])) {
    session_destroy();
    header("location:../login.html");
}else{
    echo "session not created"."<br>";
    echo $_SESSION['email'];
}
?>