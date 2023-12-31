<?php
if (isset($_SESSION['login'])) {
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
    <title>Risultati</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
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
    <div class="results">
        <h1>Grazie per aver votato!</h1>
        <h3>Ecco i risultati:</h3>
    </div>
    <?php
    require_once("phpgraphlib.php");
    $json_data = file_get_contents("check.json");
    $data = json_decode($json_data, true);
    $graph = new PHPGraphLib(400, 300);
    
    $graph->addData($data);
    
    $graph->setTitle("Preferenze di Mezzi di Trasporto");
    
    $graph->setXValuesHorizontal(true);
    
    $graph->setYValues(false);

    $graph->createGraph();
    ?>
    <footer id="footer">
            <p>Gruppo 3, "Mezzi di trasporto", Novembre 2023</p>
    </footer>
</body>
</html>
