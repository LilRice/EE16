window.onload = start;

function start() {
    const eLista = document.querySelector(".platser");
    const eKnapp = document.querySelector("button");
    let url = "./hallplatser.php";
    let index = 0;
    var lat = 0;
    var lon = 0;
    mapboxgl.accessToken = 'pk.eyJ1IjoidGluZGVycmlkZGFyZW42OSIsImEiOiJjanBheTNxczEyMG4zM2tvMzE2MnViZjAxIn0.jwlmNBTNWD8ND2UNaK7pNQ';
    
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        alert("Du har gammal webbläsare. Kan inte hitta din position.")
    }

    function showLocation(position) {
         lat = position.coords.latitude; 
         lon = position.coords.longitude;
        console.log("Din position ör: " + lat + ", " + lon); 

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/tinderriddaren69/cjptplefa5yos2rnpo0homze3', // stylesheet location
            center: [18.07, 59.33], // starting position [lng, lat]
            zoom: 10 // starting zoom
        })
        var home = document.createElement('div');
        home.className = 'marker';
        var marker = new mapboxgl.Marker(home)
            .setLngLat([lon, lat])
            .addTo(map);
        
        var marker = new mapboxgl.Marker()
            .setLngLat([18.1, 59.33])
            .addTo(map);
        
        //Omvandla data till post data
        var postData = new FormData();
        postData.append("lat", lat);
        postData.append("lon", lon);

        //Skicka data till ett php script
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "hallplatser.php", true);
        ajax.send(postData);
        ajax.addEventListener("loadend", fetchStops);
        function fetchStops() {
            //Tar emot datat från php-script
            var stopsJson = this.responseText;
            console.log(stopsJson); 

            var stops = JSON.parse(stopsJson);

            stops.forEach(stop => {
                console.log("Hållplats: ", stop[0], stop[1], stop[2]);

                var popup = new mapboxgl.Popup({
                    offset: 25
                })
                    .setText(stop[0]);

                var marker = new mapboxgl.Marker()
                    .setLngLat([stop[2], stop[1]])
                    .setPopup(popup)
                    .addTo(map);
            });
        }
    }
}