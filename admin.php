<?php
    if(isset($_SESSION['login'])){
        if ($_SESSION['login'] == "declined") {
            header("location:index.php");
        }
    }
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
    <div class="admin">
        <header id="header">

            <img src="logo.jpg" alt="logo" id="logo">

            <nav>
                <p>Andrea Marino</p>
                <p>Aurora Picco</p>
                <p>Nicolas Natale</p>
                <p>Gabriele Fazio</p>
            </nav>

        </header>
        <h1>Benvenuto nella zona dedicata all'admin!</h1>
        <h3>Ecco le persone che hanno votato:</h3>
        <div class="votanti">
        
        </div>
        <footer id="footer">
            <p>Gruppo 3, "Mezzi di trasporto", Novembre 2023</p>
        </footer>
    </div>
</body>
</html>
