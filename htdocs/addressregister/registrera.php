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

if(isset($_POST['fornamn']) && 
isset($_POST['efternamn']) && 
isset($_POST['epost'])){

    $fornamn = filter_input(INPUT_POST, 'fornamn', FILTER_SANITIZE_STRING); 
$efternamn = filter_input(INPUT_POST, 'efternamn',FILTER_SANITIZE_STRING); 
$epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_STRING);

$handtag = fopen("register.txt", "a"); 
fwrite($handtag, "$fornamn $efternamn $epost" . PHP_EOL); 
fclose($handtag);


}




?>
<div class="kontainer">  
    <h3>Registrera address</h3> 
    <form action="#" method="post">
    <label for="">Förnamn</label> <input type="text" name="fornamn"> 
    <label for="">Efternamn</label> <input type="text" name="efternamn"> 
    <label for="">E-Post</label> <input type="text" name="epost"> 
    <button>Spara</button>
    
    </form>
    </div>
</body>
</html>