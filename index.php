<?php
    if(isset($_SESSION['login'])){
        if ($_SESSION['login'] == "accept") {
            $_SESSION['login'] = "declined";
        }
    }else{
    session_start();
    $_SESSION['login'] = "declined";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accedi</title>
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
    <div class="homepage">
        <h1>Benvenuto!</h1>
        <p>Accedi per iniziare il sondaggio.</p>
        <form action="checkPassword.php" method="get">
            <label for="psw">Inserisci la password: </label>
            <!--password per l'admin e' Admin
                password per il partecipante e' Survey-->
            <input type="password" name="psw"><br>
            <input type="submit" id="submit" value="INVIA">
        </form>
    </div>
    <footer id="footer">
            <p>Gruppo 3, "Mezzi di trasporto", Novembre 2023</p>
    </footer>
</body>
</html>
