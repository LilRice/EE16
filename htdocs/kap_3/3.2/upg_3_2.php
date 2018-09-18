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
if (isset($_POST["namn"]) && isset($_POST["password"])) {
    $namn = $_POST["namn"]; 
    $password = $_POST["password"]; 
    /* Kontrollera */ 
    if( $namn == 'Bat' && $password == '1234' ) {
        echo "<p>$namn, du är inloggad! Njut av alla singel kvinnor nära ditt område! :)</p>";
    }else {
        
        echo "<p> Fel användarnamn eller lösenord. Försök igen!</p>";
    }
}
    ?>
    <p> Var vänlig logga in!</p>
    <form action="#" method="post">
        <label>Namn</label> <input type="text" name="namn"> <br>
        <label>Lösenord</label> <input type="password" name="password"><br>
        <button>Login</button>
    </form>
</body>

</html>