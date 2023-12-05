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
    
//ho aggiunto il js per il grafico per farlo funzionare si deve scaricare chart.js con il commando npm install chart.js
    <form src="results.php">
<canvas id="myChart" width="400" height="200"></canvas>

<script>
var data = <?php echo $data_json; ?>;
    var dataJson = <?php echo json_encode($data['publicTransport']); ?>;
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: dataJson,
        datasets: [{
            label: 'Grafico a Barre',
            data: data,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
         </form>
    
    <footer id="footer">
            <p>Gruppo 3, "Mezzi di trasporto", Novembre 2023</p>
    </footer>
</body>
</html>
