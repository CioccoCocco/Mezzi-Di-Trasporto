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
$graph->addData($data);
$graph->setTitle("Preferenze di Mezzi di Trasporto");
$graph->setXValuesHorizontal(true);
$graph->setYValues(false);
$graph->createGraph();

?>
