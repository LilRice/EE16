window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var keys = [];
    var raket = {
        x: 0,
        y: 0,
        v: 0, 
        h: 0
    };

    var imgRaket = new Image();
    imgRaket.src = "./bilder/raket.png";

    /* Ge variabler starvärden */
    function reset() {

        /* raketens position */
        raket.x = 350;
        raket.y = 280;
        raket.v = 0; 
        raket.h = 0;
        
    }

    function rad(v) {
        return v / 180 * Math.PI;
    }

    /* raket */
    function ritaRaket() {
        raket.x = raket.h * Math.cos(raket.v); 
        raket.y = raket.h * Math.sin(raket.v);

        ctx.beginPath();
        ctx.translate(raket.x, raket.y);
        ctx.drawImage(imgRaket, 0 - 25, 0 - 25, 50, 50);
        ctx.closePath();
    }
    /* Flytta raketen */
    function uppdateraRaket() {
        if (keys["ArrowLeft"]) {
            raket.v -= 1;
        }
        if (keys["ArrowRight"]) {
            raket.v += 1;
        }
        if (keys["ArrowUp"]) {
            raket.h += 10;
        } 
        
        if (raket.x < 0) {
            raket.x = 800;
        } 
        if (raket.x > 800 ) {
            raket.x = 0;
        } 
        if (raket.y < 0) {
            raket.y = 800;
        } 
        if (raket.y > 800 ) {
            raket.y = 0;
        }
    } 

    

    /* Lyssna på piltantagenterna */
    document.addEventListener("keydown", tryckPil);
    document.addEventListener("keyup", slappPil);

    /* Lagra vilken tangentpil som tryckts */
    function tryckPil(e) {
        keys[e.key] = true;
    }
    function slappPil(e) {
        keys[e.key] = false;
    }

    /* Innan spevar börjar */
    reset();

    /* Animationsloopen */
    function gameLoop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);

        uppdateraRaket();
        ritaRaket();

        requestAnimationFrame(gameLoop);
    }

    gameLoop();
}