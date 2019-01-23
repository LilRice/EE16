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
   $file= 'www.example.com/public_html/index.php';
   
    echo substr($file, -10);

    ?>
</body>
</html>