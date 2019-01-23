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
   $str1 = "The quick brown fox jumps over the lazy dog.";  
   $ord = array('The'); 
   $ord2 = array('That');
   $str2 = str_replace($ord, $ord2, $str1); 
   echo "<p>$str2</p>";
    ?>
</body>
</html>