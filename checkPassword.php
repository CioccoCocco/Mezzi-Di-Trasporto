<?php
    $psw = $_GET['password'];
    $psw_correct = false;
    $_SESSION['login'] = "declined";
    $lenght = strlen($psw);
    for($i = "!"; $i <"/"; $i++)
    {
        for($k=0; $k < $lenght; $k++){
            
            if(strpos($psw, $i, $k)){
            $error = "non puoi inserire le lettere speciali";
             error_reporting(0);
            }
        }
    }
    
    if(isset($error)){
        header("location:index.php?&error=$error");
    }
    if ($psw_correct) {
        $_SESSION['login'] = "accept";
        if ($psw === "Survey") {
            header("location:survey.php");
        } else if ($psw === "Admin") {
            header("location:admin.php");
        }
    }else {
        header("location:index.php");
    }
    
    
    
?>