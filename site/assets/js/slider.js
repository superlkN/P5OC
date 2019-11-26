class Slider {
    constructor() {
        this.initSlider();
    }

    initSlider() {

        let slides = document.getElementsByClassName("slides");

        let myDots = document.getElementById("myDots");

        for (let i = 0; i < slides.length; i++) {
            let dot = document.createElement("span");
            dot.className = "dot"
            dot.addEventListener( "click", e => currentSlide(i+1) );
            myDots.appendChild(dot);
        }
                    
        let slideIndex = 1;
        showSlides(slideIndex); //fonction d'appel


        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slides");
                    
            let dots = document.getElementsByClassName("dot");
                    
            // Passer de la diapositive 3 à la diapositive 1
            if (n > slides.length) {
                slideIndex = 1;
            }
                    
            // Basculer de la diapositive 1 à la diapositive 3
            if (n < 1) {
                slideIndex = slides.length;
            }
                    
                    
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
                    
                    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
                    
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }

        document.getElementById("next").onclick = function() {
            plusSlides(1);
        };

        document.getElementById("prev").onclick = function() {
            plusSlides(-1);
        };
    }
}

let slider = new Slider();
