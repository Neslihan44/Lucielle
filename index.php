<?php
$text = file_get_contents ('prenoms.txt');
$textArray = explode("\n", $text);
$randArrayIndexNum = array_rand($textArray);
$randPhrase = $textArray[$randArrayIndexNum];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nommez Votre Bebe</title>
</head>
<body>
<h1>La suggestions pour votre bebe:</h1>
<h2><?php echo $randPhrase; ?></h2>

    
</body>
</html>