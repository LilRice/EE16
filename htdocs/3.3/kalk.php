<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lånekalkylator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="#" method="post">
        <label for="">Lånebelopp</label><input type="text" name="belopp"> <br>
        <label for="">1 år</label> <input type="radio" name="ar" value="ett"><br>
        <label for="">3 år</label> <input type="radio" name="ar" value="tva"> <br>
        <label for="">5 år</label> <input type="radio" name="ar" value="tre"> <br>
        <label for="">Ränta</label> <input type="text" name="rantan">
        <button>Räkna</button>

    </form>
    <?php
if (isset($_POST["belopp"]) && isset($_POST["ar"]) && isset($_POST["rantan"])) {
    
    
    
    $belopp = $_POST["belopp"]; 
    $ar = $_POST["ar"];
    $rantan = $_POST["rantan"]/100+1;

if ($ar == "ett") {
    $ett = ($belopp * $rantan * $rantan - $belopp);
    echo "<p>Du ska betala : $ett</p>";
} 

if ($ar == "tva") {
    $tva = ($belopp * $rantan * $rantan * $rantan * $rantan- $belopp);
    echo "<p>Du ska betala : $tva</p>";
}

if ($ar == "tre") {
    $tre = ($belopp * $rantan * $rantan * $rantan * $rantan * $rantan * $rantan- $belopp);
    echo "<p>Du ska betala : $tre</p>";
}
   


    
    
}


?>
</body>

</html>