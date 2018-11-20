<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <header>
    
    </header> 
    <main>  

    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {

        
    
       $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) ;
        if($username && $password) { 
        /*Spara med ny rad som använder namn¤losen i admin.txt*/
        $handtag = fopen($_SERVER['DOCUMENT_ROOT'] . '../../configadmin.txt', 'a');
        $hash = password_hash($losen, PASSWORD_DEFAULT);
    fwrite($handtag, $username . '¤' . $hash . PHP_EOL);
    fclose($handtag);
    echo "<script>alert('Användaren har registrerats');</script>"; 
 }
 }
        
        ?>

    <form action="#" method="post">
            <label for=""></label>Username<input type="text" name="username"><br>
            <label for=""></label>Password<input type="password" name="password"><br>
        <button>Registrera</button>
        </form>
    
    </main> 

    <footer>
    ShopSmart 2018
    </footer>
    </div>
</body>
</html>