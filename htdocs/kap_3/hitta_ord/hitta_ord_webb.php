<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hitta ord på en webbsida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="hitta_ord_webb_b.php" method="post">
    <label for="ruta">URL: </label> 
    <input type="https://astro.elle.se/" name="url"><br>
    <input type="text" name="replace"><br>
    <label for=""> Ordet: </label>
    <input type="text" name="ordet"><br>
    <button>hitta ord</button>
</body>
</html>