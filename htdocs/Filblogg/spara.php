<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./mycss.css" />
    <script src="main.js"></script>
</head>
<body> 

<?php

/* Ta emot text  from form och spara den i textfil  */ 

$texten = $_POST["inlagg"]; 
echo $texten; 

$handtag = fopen("inlaggen.txt" , 'a');
fwrite($handtag, $texten); 
fwrite($handtag, " \n");
echo "<p>
Inlägget har sparats! </p>";

fclose($handtag); 


?>
    
</body>
</html>

