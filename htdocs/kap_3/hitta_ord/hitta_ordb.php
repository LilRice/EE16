<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
/* Ta emot data */ 

$texten = $_POST["texten"]; 
$needle = $_POST["ordet"]; 

/* Dela upp texten i en array  */ 
$haystack = str_word_count($texten, 1); 
$antal = 0;
/* Sök igenom texten efter ordet */ 
foreach ($haystack as $word) {
    if($word == $needle) { 
        $antal++;

    }
}
/* Skriv ut Resultat */
echo "<p>Vi har hittat ordet $antal gånger</p>"
?>
</body>
</html>