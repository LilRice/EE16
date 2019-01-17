<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BENDER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1><?php
    echo $_SERVER['SERVER_ADDR'];
    ?></h1>
<form action="#" method="post">
<label>Namn</label> 
<input type="text" name="namn" id="namn" placeholder="Ditt namn..." value="">

<textarea readonly id="chatt" cols="30" rows="10">
    <?php 
echo file_get_contents("chatt.txt");
?>
</textarea>
<input type="text" name="meddelande" id="meddelande" placeholder="Ditt meddelande..."> 
<button>Skicka</button>
</form>
</div>
    <script src="chatt.js"></script>
</body>
</html>