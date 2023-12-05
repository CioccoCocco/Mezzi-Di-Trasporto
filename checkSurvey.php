<?php
    if(isset($_SESSION['login'])){
        if ($_SESSION['login'] == "declined") {
            header("location:index.php");
            exit();
        }
    }
    
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
/*
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
*/


    if($error != ""){
        
        //inserimento del JSON
        $data = array(
        'name' => $name,
        'surname' => $surname,
        'publicTransport' => $publicTransport,
    );
    $file = 'check.json';
    $jsonData = file_get_contents($file);
    $existingData = json_decode($jsonData, true);
    $existingData[] = $data;
    //array_push($existingData, $data);
    //var_dump($existingData);
    $result = file_put_contents($file, json_encode($existingData, JSON_PRETTY_PRINT));

    if ($result === false) {
        die('Si è verificato un errore durante la scrittura nel file JSON.');
    }
        //fine inserimento
        header("location:survey.php?&error=$error");
        exit();
    }else{
        header("location:results.php?&error=$error");
        exit();
    }

    

   

    
?>
