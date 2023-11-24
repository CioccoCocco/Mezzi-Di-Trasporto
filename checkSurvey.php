<?php
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $publicTransport = $_POST["publicTransport"];

    $lenght = strlen($name);
    for($i = "!"; $i <"/"; $i++)
    {
        for($k=0; $k < $lenght; $k++){
            if(strpos($string, $i, $k)){
                echo "non puoi inserire le lettere speciali";
                error_reporting(0);
            }
        }
    }

    $myJSON = $myJSON = json_encode($name, $surname, $publicTransport);

?>
