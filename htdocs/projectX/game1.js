window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");
    var keys = [];
    var imgSpelare = new Image();
    imgSpelare.src = "";
    var blocks = [];
    class Block {
        constructor() {
            this.x = Math.ceil(Math.random() * 6) * 100 + 800;
            this.y = 580;
        }
        ritaBlock() {
            ctx.beginPath();
            ctx.rect(this.x, this.y, 20, 10);
            ctx.fillStyle = "#FFF";
            ctx.fill();
            ctx.closePath();
        }
        uppdateraBlock() {
            if (this.x > 0) {
                this.x -= 2.5;
                this.ritaBlock();
            } else {
                this.x = Math.ceil(Math.random() * 6) * 100 + 800;
            }
        }
        collision(racket) {
            if ((racket.x <= this.x && this.x <= (racket.x + 32)) &&
                (racket.y <= this.y && this.y <= (racket.y + 32))) {
                alert("Game Over!");
                reset();
            }
        }
    }
    class Racket {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.v = -4;
            this.a = 0.2;
            this.jump = false;
            this.points = 0;
        }
        /* Racket */
        ritaRacket() {
            ctx.beginPath();
            ctx.rect(this.x, this.y, 32, 32);
            ctx.fillStyle = "#FFF";
            ctx.fill();
            ctx.closePath();
        }
        uppdateraRacket() {
            //Upp
            if (keys["ArrowUp"] && this.y >= 570) {
                this.jump = true;
            }
            //Ner
            if (this.jump && this.y > 20) {
                this.v += this.a;
                this.y += this.v;
            }
            if (this.y > 570) {
                this.y = 570;
                this.v = -4;
                this.jump = false;
            }
            this.ritaRacket();
            this.points++;
        }
        highscore() {
            ctx.fillText("HighScore: " + this.points, 10, 50);
        }
    }
    var racket = new Racket();
    for (let index = 0; index < 5; index++) {
        var block = new Block();
        blocks.push(block);
    }
    /* Ge variabler starvärden */
    function reset() {
        /* Racketens position */
        racket.x = 50;
        racket.y = 570;
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
    reset();
    /* Animationsloopen */
    function gameLoop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);
        racket.uppdateraRacket();
        blocks.forEach(block => {
            block.uppdateraBlock();
            block.collision(racket);
        });
        racket.highscore();
        requestAnimationFrame(gameLoop);
    }
    gameLoop();
}