<?php
    if(isset($_SESSION['login'])){
        if ($_SESSION['login'] == "declined") {
            header("location:index.php");
        }
    }
require_once("phpgraphlib.php");
$json_data = file_get_contents("check.json");
$data = json_decode($json_data, true);
$graph = new PHPGraphLib(400, 300);

// Aggiungi dati al grafico
$graph->addData($data);

// Imposta il titolo del grafico
$graph->setTitle("Preferenze di Mezzi di Trasporto");

// Imposta l'etichetta sull'asse X
$graph->setXValuesHorizontal(true);

// Imposta l'etichetta sull'asse Y
$graph->setYValues(false);

// Disegna il grafico
$graph->createGraph();

?>
