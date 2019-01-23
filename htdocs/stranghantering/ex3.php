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
    $text = "The quick brown fox jumps over the lazy dog"; 
    $ord = "quick";
    if(strpos($text,$ord) ) {
        echo "Ordet finns";
    }else {
        echo "ordet finns inte";
    }
    
    

    ?>
</body>
</html>