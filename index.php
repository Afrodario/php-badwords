<?php
$testo = "Da un grande potere derivano grandi responsabilità";

$parolaCensurata = $_GET['parolaccia'];

$censura = "***";

$testoModificato = str_replace($parolaCensurata, $censura, $testo);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione PHP</title>
</head>
<body>
    <h1><?php echo $testo ?></h1>
    <h2>La lunghezza della stringa è di <?php echo strlen($testo) ?> caratteri.</h2>
    <h1><?php echo $testoModificato ?></h1>
    <h2>La lunghezza della stringa censurata è di <?php echo strlen($testoModificato) ?> caratteri.</h2>
</body>
</html>