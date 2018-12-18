<?php
if (isset($_POST["koordinater"]) && isset($_POST["beskrivningar"])) {
    echo "nångting";
    $koordinater = filter_input(INPUT_POST, "koordinater", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY); 
    $beskrivningar = filter_input(INPUT_POST, "beskrivningar", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY); 
    
    $handtag = fopen ("platser.txt", "w");
    foreach ($koordinater as $key => $koordinat) {
        fwrite($handtag, "$koordinat:$beskrivningar[$key]" . PHP_EOL);
    }
    fclose($handtag);
    echo "Klart";
}else { 
    echo "Inte klart";
}
?>