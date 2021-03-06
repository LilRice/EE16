<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kassa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer kassa">
        <header>
            <h1>Kassan</h1> 
            <?php
            /* Ta emot data */ 
            $antalVaror = filter_input(INPUT_POST, 'antalVaror', FILTER_SANITIZE_NUMBER_INT); 
            $total = filter_input(INPUT_POST, 'total',FILTER_SANITIZE_NUMBER_INT); 
            
            
            if (isset($_POST['antalVaror']) && 
                isset($_POST['total']) &&
                isset($_POST['korgen'])){
                    /*Ta emot data */ 
                    $antalVaror = $_POST['antalVaror'];
                    $total = $_POST['total'];
                    $korgen = $_POST['korgen']; 


                   
                    $varor = json_decode($korgen); 
                    echo "<table>";
                    echo "<tr>
                    <th>Beskrivning</th> 
                    <th>Antal</th> 
                    <th>StyckPris</th>
                    <th>Summa</th> 
                   

                     </tr>";
                    foreach ($varor as $vara) { 
                        $beskrivning = filter_var($vara->beskrivning, FILTER_SANITIZE_STRING); 
                        $antal = filter_var($vara->antal, FILTER_SANITIZE_NUMBER_INT); 
                        $pris = filter_var($vara->pris, FILTER_SANITIZE_NUMBER_INT); 
                        $summa = filter_var($vara->summa, FILTER_SANITIZE_NUMBER_INT);

                        echo "<tr>";
                        echo "<td>$vara->beskrivning</td>";
                        echo "<td>$vara->antal</td>";
                        echo "<td>$vara->pris kr</td>";
                        echo "<td>$vara->summa kr</td>"; 
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                    echo "<div class=\"total\">";
                    echo "<p>Antal varor: $antalVaror</p>"; 
                    echo "<p>Total : $total</p>"; 
                    echo "</div>";
            }
            ?>

        </header>
        <head>

        </head>
        <footer>
            Bat Ganbat
        </footer>
    </div>
</body>
</html>