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

        
        if(empty($name) ||  !preg_match('/^[A-Za-z ]+$/', $name)){
            $error = "non ha inserito il nome";
            header("location:survey.php?&error=$error");
        }else if(empty($surname)||  !preg_match('/^[A-Za-z ]+$/', $name)){
            $error = "non ha inserito il cognome";
            header("location:survey.php?&error=$error");
        }
    /* vecchio metodo per controllare se l'utente non abbia messo caratteri speciali
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
            header("location:survey.php?&error=$error");
            exit();
        }else{

            $data = array(
                'name' => $name,
                'surname' => $surname,
                'publicTransport' => $publicTransport,
            );

            $file = 'check.json';
            $fileAssoluto = realpath($file);
            // $jsonData = file_get_contents($fileAssoluto);
           
                
            // $existingData = json_decode($jsonData, true);
            
            // $existingData[] = $data;

            //array_push($existingData, $data);
            //var_dump($existingData);
            // $tentativo =json_encode($existingData);
            $jsonData = json_encode($data);
            $results = file_put_contents($fileAssoluto, $jsonData, FILE_APPEND);
            
                header("location:results.php?&error=$error");
            exit();
        
    }
    ?>
