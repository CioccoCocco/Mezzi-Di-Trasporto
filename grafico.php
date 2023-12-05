<?php
    if(isset($_SESSION['login'])){
        if ($_SESSION['login'] == "declined") {
            header("location:index.php");
        }
    }
require_once("phpgraphlib.php");
$json_data = file_get_contents("check.json");
$data = json_decode($json_data, true);
?>
