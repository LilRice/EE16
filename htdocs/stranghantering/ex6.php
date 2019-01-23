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
    $mail = "rayy@mail.com"; 
    $name = strstr($mail, "@", true ); 
    echo "<p>$name</p>";
    ?>
</body>
</html>