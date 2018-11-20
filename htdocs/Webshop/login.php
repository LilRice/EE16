<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer nyVara">
        <header>
        <h1>Inloggning</h1>
            <nav>
                <a href="ny_vara.php">Ny Vara</a>
                <a href="login.php">Logga In</a>
                <a href="lista_vara.php">Handla</a>
            </nav>
        </header>
        <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
       $password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) ;
       /*Hash filen rad för för rad*/  

       $allaRader = file($_SERVER['DOCUMENT_ROOT'] . '../../configadmin.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        /* loopa igenom rad för rad */
        foreach ($allaRader as $rad) {
        $delar = explode("¤", $rad); 

        if (sizeof($delar) != 2) {
            continue;
        } 

        $usernameFil = $delar[0]; 
        $hashFil = $delar[1]; 

if ($username == $usernameFil) {
if(password_verify($password, $hashFil)) {
    $_SESSION['username'] = "TinderRiddaren"; 
    header('Location: ny_vara.php'); 
    exit; 

}else {
    echo "<p>Fel lösenord</p>";
}
}else {
    echo "<p>Fel använder namn</p>";
}
        }

        if  ($username == 'TinderRiddaren69' && $password == 'ImSoLonely') {
            $_SESSION['anamn'] = 'TinderRiddaren69';    
            echo "<p>Were in bois!</p>";
        } else {
            echo "<p>Wrong Password or Username.</p>";
        }
    } 

        ?>

        
        <form action="#" method="post">
            <label for=""></label>Username<input type="text" name="username"><br>
            <label for=""></label>Password<input type="password" name="password"><br>
        <button>Log in</button>
        </form>
    </div>
</body>
</html>