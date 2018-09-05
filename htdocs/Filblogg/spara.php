<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./mycss.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<<?php include "header.inc" ?>
<main>
<?php

/* Ta emot text  from form och spara den i textfil  */ 

$texten = $_POST["inlagg"]; 
echo $texten;  
$tidpunkt = date('F Y h:i A');


$handtag = fopen("inlaggen.txt" , 'a');
fwrite($handtag, "<p>" . $texten . "\n " .  $tidpunkt ."</p>" .  "\n  "); 

echo "<p>
Inlägget har sparats! </p>";

fclose($handtag); 


?>
</main>
<footer>
WhipnDab
</footer>
</div>


</body>
</html>