<?php

if (isset($_POST["lat"]) && isset($_POST["lon"])) {
    $lat = filter_input(INPUT_POST, "lat", FILTER_SANITIZE_STRING);
    $lon = filter_input(INPUT_POST, "lon", FILTER_SANITIZE_STRING);
    
    /* cst = corect search term */
    // $cst = str_replace(' ', '+', $search);
    // $cst2 = $cst . "&entity=song&limit=5";
    $api = "5a04359da47042b7837f88a5c61908c9";
    
    $radius = 500; 
    $max = 99; 
    $url = "http://api.sl.se/api2/nearbystops.json?key=$api&originCoordLat=$lat&originCoordLong=$lon&maxresults=$max&radius=$radius";
    
    $json = file_get_contents($url);
    //print_r($json);
    
    $jsonData = json_decode($json);
    
    $stopLocation = $jsonData->LocationList->StopLocation;
   
    $stops = [];
    foreach ($stopLocation as $stop) {
        $name = $stop->name;
        $lat= $stop->lat;
        $lon = $stop->lon; 
        $stops[] = [$name, $lat, $lon];   
    }
    echo json_encode($stops);
    
}else {
    "Något blev fel!";
}
?>