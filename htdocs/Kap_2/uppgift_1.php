<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="uppgift_1b.php" method="post"> 
<label for="namn"></label> <input type="text" name="namn"> <br>
<label for="email"></label> <input type="text" name="email"> <br>
<label for="phone"></label> <input type="text" name="phone"> <br>

<button>Mobiltelefon</button>
<button>E-mail</button>
</form>

<form action="uppgift_1b.php" method="post">

    Vill du ha nyhetsbrev?

    <input type="checkbox" name="nyhetsbrev" value="Yes" />

    <input type="submit" name="submit" value="Submit" />

</form>

    <?php  
    
    ?>
</body>
</html>