class Slider {
    constructor(i, time, timer, slide, playing, nextImg, prevImg, pause) {
        this.i = i;
        this.time = time;
        this.timer = timer;
        this.slide = slide;
        this.playing = playing;
        this.nextImg = document.getElementById("fleche-droite");
        this.prevImg = document.getElementById("fleche-gauche");
        this.pause = document.getElementById("bouton-pause");
        this.init();
    }

    init() {
        this.afficherSlide();
        this.imageSuivante();
        this.nextImg.addEventListener("click", this.imageSuivante.bind(this));
        this.prevImg.addEventListener("click", this.imagePrecedente.bind(this));
        this.register();
    }

    afficherSlide() {
        this.slide[0] = {
            images: 'assets/img/5.jpg', 
        }
        this.slide[1] = {
            'images': 'assets/img/7.jpg',
        }
        this.slide[2] = {
            'images': 'assets/img/1.jpg',
        }
        this.slide[3] = {
            'images': 'assets/img/4.jpg',
        }
    }

    imageSuivante() {
        this.i++;
        if (this.i >= this.slide.length) {
            this.i = 0;
        }

        document.getElementById("imgSlider").src = this.slide[this.i].images;

        clearTimeout(this.timer);
        this.timer = setTimeout(this.imageSuivante.bind(this), this.time);
    }

    imagePrecedente() {
        this.i--;
        if (this.i < 0) {
            this.i = this.slide.length - 1;
        }

        document.getElementById("imgSlider").src = this.slide[this.i].images;

        clearTimeout(this.timer);
        this.timer = setTimeout(this.imageSuivante.bind(this), this.time);
    }

    register() {
        var that = this;
        window.addEventListener("keydown", function (e) {
            return that.touchesBouton(e);
        });
    }

    touchesBouton(e) {
        switch (e.keyCode) {
            case 39:
                this.imageSuivante();
                break;
            case 37:
                this.imagePrecedente();
                break;
        }
    }
}

let slider = new Slider(0, 10000, "", [], true);