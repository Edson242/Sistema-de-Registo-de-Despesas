<?php 
    session_start();

    unset($_SESSION['logged']);
    unset($_SESSION['usuario']);

    header("location:../login.html");
?>