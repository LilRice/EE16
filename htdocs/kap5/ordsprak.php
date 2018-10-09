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
    $allaOrdsprak[] = "Att skiljas är att dö en smula"; 
    $allaOrdsprak[] = "Borta bra men hemma bäst"; 
    $allaOrdsprak[] = "Det är mänskligt att fela"; 
    $allaOrdsprak[] = "ingenting är nytt under solen";
    $allaOrdsprak[] = "Ju fler kockar ju sämre soppa";
    $allaOrdsprak[] = "Kasta inte pärlor åt svinen";
    $allaOrdsprak[] = "Lärdom är mer värt än guld";
    $allaOrdsprak[] = "Små grytor har också öron";
    $allaOrdsprak[] = "Var ska sleven vara om inte gröten";
    $allaOrdsprak[] = "Ett gott skratt förlänger livet";

    $antalallaOrdsprak = count($allaOrdsprak);
    echo "<p> Jag har $antalallaOrdsprak i min array. ";  

    /*Skriv ut alla ordspråk i arrayen */
    foreach ($allaOrdsprak as   $ordspak) {
        echo "<p>$ordspak</p>";
    } 

    /* Skriv ut 3 ordspråk */ 
    for ($i=0; $i < 3  ; $i++) { 
     echo "<p> $allaOrdsprak[$i]</p>";

    }

    /* Skriv alla ordspråk med en for loop */ 
    echo "<h3>Slumpa fram ett ordspråk 3 ggr</h3>";
    /* Skapa en tom array som ska innergålla all slumptal  */
    $allaSlumptal = [];
    for ($i=0; $i < 3 ; $i++) {  
        do{
            $slumptal = rand(0, 9); 
        }while (in_array($slumptal, $allaSlumptal));
         
        /**  Spara undan slumptalet */
        $allaSlumptal[] = $slumptal; 

/** Skriv ut ordspråket */
    echo "<p>" . $allaOrdsprak[$slumptal] . "</p>";
    } 

    
    ?>
</body>
</html>