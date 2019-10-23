<?php $title = 'Présentation'; ?>

<?php ob_start(); ?>

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
            <div class="inner">
            <h3 class="masthead-brand">Menuiserie Quellard</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentations</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
            </nav>
            </div>
    </header>

    <section id="slider">
            <img width="800" height="600" id="imgSlider" src="assets/img/velo-lyon.jpg" alt="images_lyon">
            <div class="boutons-slider">
                <a class="fas fa-backward" id="fleche-gauche"></a>
                <a class="fas fa-forward" id="fleche-droite"></a>
                <a id="bouton-pause" class="bouton">❚❚</a>
            </div>
    </section>

    <div class="presentation">
        <h1> Presentation : </h1>

        <p> Société à responsabilité limitée unipersonnelle est active depuis 2013.
        Établie à CREVIN (35320), elle est spécialisée dans le secteur d'activité des travaux de menuiserie bois et pvc. Son effectif est compris entre 3 et 4 salariés.
        </p>
    </div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> Lundi - Vendredi 9:00 - 19:00 </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> 02 99 42 41 83 </p>

            <h4 class="lead"> E-mail : </h4>
            <p> blablabla@gmail.com </p>
        </div>
</footer>
</div>

<script src="assets/js/slider.js"></script>


<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>