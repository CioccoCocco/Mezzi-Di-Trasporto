<?php
    if(isset($_SESSION['login'])){
        if ($_SESSION['login'] == "declined") {
            header("location:index.php");
        }
    }
    $json_data = file_get_contents("check.json");
    $data = json_decode($json_data, true);

    print_r($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">

            <img src="./image/logo.png" alt="logo" id="logo">

            <nav>
                <p>Andrea Marino</p>
                <p>Aurora Picco</p>
                <p>Nicolas Natale</p>
                <p>Gabriele Fazio</p>
            </nav>

    </header>
    <div class="admin">
        <h1>Benvenuto nella zona dedicata all'admin!</h1>
        <h3>Ecco le persone che hanno votato:</h3>
        <div class="votanti">
            <form action="admin.php" ></form>
        </div>
    </div>
    <footer id="footer">
            <p>Gruppo 3, "Mezzi di trasporto", Novembre 2023</p>
    </footer>
</body>
</html>
