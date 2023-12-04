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
        <h1>Benvenuto nella zona dedicata all'admin!</h1>
        <h3>Ecco le persone che hanno votato:</h3>
        <div class="votanti">

        </div>
    </div>
</body>
</html>