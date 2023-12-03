e<?php
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
            
            if(strpos($name, $i, $k)){
            $error = "non puoi inserire le lettere speciali";
             error_reporting(0);
            }
        }
    }
    $lenght_surname = strlen($surname);
    for($i = "!"; $i <"/"; $i++)
    {
        for($k=0; $k < $lenght_surname; $k++){
            
            if(strpos($surname, $i, $k)){
            $error = "non puoi inserire le lettere speciali";
             error_reporting(0);
            }
        }
    }


    if($error != ""){
        header("location:survey.php?&error=$error");
    }else{
        header("location:results.php?&error=$error");
    }

    

    $myJSON = $myJSON = json_encode($name, $surname, $publicTransport);
    var_dump($myJSON);
    file_put_contents('check.json', $myJSON);

    
?>
