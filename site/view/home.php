<?php $title = 'Menuiserie Quellard'; ?>

<?php ob_start(); ?>
<img class="logo" width="100" height="100" src="assets/img/logo.png">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
            <div class="inner">
            
            <h1 class="masthead-brand">Menuiserie Quellard</h1>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentations</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
            </nav>
            
            </div>
    </header>

    <i class="fas fa-sign-in-alt"></i>

    <section id="slider">
            <img width="800" height="600" id="imgSlider" src="assets/img/velo-lyon.jpg" alt="images_lyon">
            <div class="boutons-slider">
                <a class="fas fa-backward" id="fleche-gauche"></a>
                <a class="fas fa-forward" id="fleche-droite"></a>
                <a id="bouton-pause" class="bouton">❚❚</a>
            </div>
    </section>

    <div class="presentation">
        <h2> Bienvenue sur notre site web : </h2>

        <p> Société à responsabilité limitée unipersonnelle est active depuis 2013.
        Établie à CREVIN (35320), elle est spécialisée dans le secteur d'activité des travaux de menuiserie bois et pvc. Son effectif est compris entre 3 et 4 salariés.
        </p>
        <p class="lead">
          <a href="index.php?action=showPresentation" class="btn btn-lg btn-secondary">En apprendre plus</a>
        </p>
    </div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <h4 class="lead"> Adresse : </h4>
            <p> 9 RUE DU CHAMP GUIHORE 35320 CREVIN </p>

            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> Lundi - Vendredi 9:00 - 19:00 </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> 02 23 30 92 60 </p>

            <h4 class="lead"> E-mail : </h4>
            <p> joel.quellard@sfr.fr </p>
        </div>
    </footer>
</div>

<script src="assets/js/slider.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>