<?php
include("phpgraphilib.php");
$graph=new PHPGraphLib(500,400);
$file = file_get_contents("check.json");
$json = json_decode($file);
$array;




for($i = 0; $i< $json.$publicTransport.$lenght; $i++){
    for($k = 0; $k < $json.$name.$lenght; $k++){
        if($json.$name[$k].$publicTransport == $json.$pubpublicTransport[$i]){
            $array[$i]++;
        }
    }
}

$graph->addData($array);

$graph->setTitle("Transporti più utilizzati");

$graph->setBars(false);

$graph->setLine(true);

$graph->setDataPoints(true);

$graph->setDataPointColor("blue");

$graph->setDataValues(true);

$graph->setDataValueColor("red");


?>
