<?php
$localita = $_POST['localita'];
$data = $_POST['data'];
$ora = $_POST['ora'];
$tipo = $_POST['tipo'];
$umidita = $_POST['umidita'];
$clima = $_POST['clima'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/CSS/style.css">
</head>
<body>
    <div class="box-output">
        <h2>Rilevazione inserita</h2>
        <p><?php echo "Località: $localita <br>";?></p>
        <p><?php echo "Data: $data <br>";?></p>
        <p><?php echo "Ora: $ora <br>";?></p>
        <p><?php echo "Tipo rilevazione: $tipo <br>";?></p>
        <p><?php echo "Umidità: $umidita <br>";?></p>
        <p><?php echo "Clima attuale: $clima <br>";?></p>
    </div>

    <div class="box-link">
        <p><a href="temperatura.html">Torna alla pagina di inserimento</a></p>
    </div>
</body>
</html>