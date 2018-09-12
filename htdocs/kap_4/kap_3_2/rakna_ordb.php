<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <?php 
/*Ta emot data */
$texten = $_POST["texten"];
/*Räkna andtal ord */

$antal = str_word_count($texten);

/*Skriv svar med resultat */ 
echo "<p>texten innehåller $antal ord.</p>";
?>
</body>
</html>