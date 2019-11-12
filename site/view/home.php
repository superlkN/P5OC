<?php $title = 'Menuiserie Quellard'; ?>

<?php ob_start(); ?>
<img class="logo" width="100" height="100" src="assets/img/logo.png">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
            <div class="inner">
            
            <h1 class="masthead-brand">Menuiserie Quellard</h1>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentation</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
                <?php if (isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == 1) { ?>
                <a class="nav-link active" href="index.php?action=showDash">Dashboard</a>
                <?php } ?>
            </nav>
            
            </div>
</header>

    <section id="slider">
        <div class="container3">
            <div class="slides">
                <img src="<?= $slide1 ?>" style="width:100%">    
            </div>

            <div class="slides">
                <img src="<?= $slide2 ?>" style="width:100%">
            </div>

            <div class="slides">
                <img src="<?= $slide3 ?>" style="width:100%"> 
            </div>

            <div class="slides">
                <img src="<?= $slide4 ?>" style="width:100%"> 
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

            <br>


            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>

        <script>

            var slideIndex = 1;
            showSlides(slideIndex); //fonction d'appel

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slides");
            var dots = document.getElementsByClassName("dot");
            
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

        </script>
        
    </section>

    <div class="presentation">
        <h2> Bienvenue sur notre site web : </h2>

        <p> 
            <?= $text1['content'] ?>
        </p>

        <p class="lead">
          <a href="index.php?action=showPresentation" class="btn btn-lg btn-secondary">En apprendre plus</a>
        </p>
    </div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <h4 class="lead"> Adresse : </h4>
            <p> <?php echo $footer['adresse'] ?> </p>

            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> <?php echo $footer['horaires'] ?> </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> <?php echo $footer['numero'] ?> </p>

            <h4 class="lead"> E-mail : </h4>
            <p> <?php echo $footer['mail'] ?> </p>
        </div>
        <?php if (!isset($_SESSION['id'])) { ?>
        <a class="bouton-connect" href="index.php?action=showLogin"><i class="fas fa-sign-in-alt"></i></a>
        <a class="bouton-inscription" href="index.php?action=showInscription"><i class="far fa-edit"></i></a>
        <?php } ?>
        <?php if (isset($_SESSION['id'])) { ?>
        <a class="bouton-logout" href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i></a>
        <?php } ?>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>