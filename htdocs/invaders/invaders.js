window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var  antalKlossar;
    var keys = [];
    var klossar = []; 
    racket = {
        x: 0, 
        y: 0
    } 

    class Skott {
        constructor() {
            this.x = 0; 
            this.y = 0; 
            this.hastighet = 10;
            this.live = true;
            
        } 
        ritaSkott() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, 5, 0, Math.PI * 2, false);
            ctx.fillStyle = "yellow"; 
            ctx.fill();
            ctx.closePath();
        }
        reset() {
            this.y
        }
        uppdatera() {
            this.x += this.hastighet;
        } 
        kolission() {
            
        }
    }
    var skott1 = new Skott();

    /* Ge variabler starvärden */
    function reset() {
       
        

        /* Racketens position */
        racket.x = 400;
        racket.y = 580;

        skott1.y = racket.y;

        antalKlossar = 0;
        skapaAllaKlossar(); 

        
    }

    /* Racket */
    function ritaRacket(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 70, 10);
        ctx.fillStyle = "#FFF";
        ctx.fill();
        ctx.closePath();
    }

    

    /* Kloss */
    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 100, 30);
        ctx.fillStyle = "#FFF";
        ctx.fill();
        ctx.closePath();
    }

    /* Skapa en array för alla klossar */
    function skapaAllaKlossar() {
        /* Skapa rader */
        for (let j = 1; j < 5; j++) {
            klossar[j] = [];
            /* Skapa klossar */
            for (let i = 0; i < 6; i++) {
                klossar[j][i] = {
                    x: 40 + i * 120,
                    y: j * 50,
                    hit: false
                };
                antalKlossar++;
            }
        }
    }

    /* Rita ut klossar som finns i arrayen */
    function uppdateraAllaKlossar() {
        /* Skapa rader */
        for (let j = 1; j < 5; j++) {
            /* Skapa klossar */
            for (let i = 0; i < 6; i++) {
                if (!klossar[j][i].hit) {
                    ritaKloss(40 + i * 120, j * 50);
                }
            }
        }
    }

    

    /* Lyssna på piltantagenterna */
    document.addEventListener("keydown", tryckPil);
    document.addEventListener("keyup", slappPil);

    function tryckPil(e) {
        keys[e.key] = true;
    }

    function slappPil(e) {
        keys[e.key] = false;
    }

    function uppdateraRacket() {
        if (keys["ArrowLeft"] && racket.x > 10) {
            racket.x -= 10;
           
        }
        if (keys["ArrowRight"] && racket.x < 720) {
            racket.x += 10;
        }
        skott1.x = racket.x + 35;

        if (keys[" "]) {
            skott1.hastighet = 10;
        }

         
        
    }

    /* Innan spelet börjar */
    reset();
    skapaAllaKlossar();

    /* Animationsloopen */
    function gameLoop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600)
       
        uppdateraAllaKlossar();
        uppdateraRacket();
        ritaRacket(racket.x, racket.y);
        skott1.ritaSkott();
        skott1.uppdatera();
        

        
        
        
         
        
        
        

        if (antalKlossar == 0) {
            alert("Du vinner!");
            reset();
        }

        requestAnimationFrame(gameLoop);
    }

    gameLoop();
}