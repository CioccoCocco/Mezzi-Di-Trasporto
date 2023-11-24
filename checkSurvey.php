<?php
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $publicTransport = $_POST["publicTransport"];
    $error = "";

    
    if(empty($name)){
        $error = "non ha inserito il nome";
        header("location:survey.php?&error=$error");
    }else if(empty($surname)){
        $error = "non ha inserito il cognome";
        header("location:survey.php?&error=$error");
    }


    $lenght = strlen($name);
    for($i = "!"; $i <"/"; $i++)
    {
        for($k=0; $k < $lenght; $k++){
            if(strpos($string, $i, $k)){
                
                
                error_reporting(0);
            }
        }
    }

    if($error != ""){
        $error = "non puoi inserire le lettere speciali";
        header("location:survey.php?&error=$error");
    }

    

    $myJSON = $myJSON = json_encode($name, $surname, $publicTransport);

    
?>
