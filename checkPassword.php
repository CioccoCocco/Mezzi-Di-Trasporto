<?php
    $psw = $_GET['psw'];
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
    }else{
        $_SESSION['login'] = "accept";
        if ($psw === "Survey") {
            header("location:survey.php");
        } else if ($psw === "Admin") {
            header("location:admin.php");
        }
    }
    
    
    
?>