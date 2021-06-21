<?php

$_GET["name"];
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quisquam voluptas, atque cumque aperiam quisquam quia pariatur ipsum ex dolor obcaecati molestiae quisquam porro aliquid.";
$toCensor = "quisquam";
$newText = str_replace($toCensor, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo Esercizio PHP</title>
</head>

<body>
    <h1>Primo esercizio PHP</h1>
    <p><?php echo $text; ?>
    <br>
    Questo paragrafo è lungo: <?php echo strlen($text);?> caratteri.</p>
    <h1>Questo è il testo censurato:</h1>
    <p><?php echo $newText; ?>
    <br>
    Questo paragrafo è lungo: <?php echo strlen($newText);?> caratteri.
    </p>
    
</body>

</html>