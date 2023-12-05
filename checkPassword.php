<?php
    $psw = $_GET['psw'];
    $_SESSION['login'] = "declined";
    
    
    if ($psw === "Survey") {
        $_SESSION['login'] = "accept";
        header("location:survey.php");
    } else if ($psw === "Admin") {
        $_SESSION['login'] = "accept";
        header("location:admin.php");
    }else{
        header("location:index.php");
    }
    
    
    
    
?>