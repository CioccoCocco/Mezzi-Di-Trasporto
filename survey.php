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
    <title>Sondaggio</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <div class="survey">
        <header id="header">

            <img src="logo.jpg" alt="logo" id="logo">

            <nav>
                <p>Andrea Marino</p>
                <p>Aurora Picco</p>
                <p>Nicolas Natale</p>
                <p>Gabriele Fazio</p>
            </nav>

        </header>
        <h1>Sondaggio sui mezzi di trasporto</h1>

        <form action="checkSurvey.php" method="get">
            <label for="nome">Inserisci il tuo nome: </label>
            <input type="text" name="nome"><br>
            <label for="cognome">Inserisci il tuo cognome: </label>
            <input type="text" name="cognome"><br>
            <label for="mezzo">Scegli dalla lista il mezzo che preferisci maggiormente: </label>
            <select name="mezzi" id="mezzi">
                <option value="piedi">Piedi</option>
                <option value="automobile">Automobile</option>
                <option value="bicicletta">Bicicletta</option>
                <option value="treno">Treno</option>
                <option value="autobus">Autobus</option>
                <option value="metro">Metropolitana</option>
                <option value="tram">Tram</option>
                <option value="nave">Nave</option>
                <option value="moto">Motocicletta</option>
            </select><br>
            <input type="submit" value="INVIA">
        </form>
        <footer id="footer">
            <p>Gruppo 3, "Mezzi di trasporto", Novembre 2023</p>
        </footer>
    </div>
</body>
</html>
