<?php $title = 'Présentation'; ?>

<?php ob_start(); ?>

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

    <div class="presentation">
        <h2> Presentation : </h2>

        <p> La Menuiserie Quellard a été crée en 2013 par Mr Quellard Joel. <br>
            Spécialisé dans la menuiserie depuis 30 ans, <br>
            Mr Quellard est à votre service pour tous vos travaux de menuiseries extérieures et intérieures, placards, ainsi que l'isolation et le placoplatre. <br>
            L'entreprise est qualifiée RGE. <br>
            <img class="logorge" width="100" height="100" src="assets/img/rge.png">
        </p>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/QhEVJsph5-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <h4 class="lead"> Adresse : </h4>
            <p> 9 RUE DU CHAMP GUIHORE 35320 CREVIN </p>

            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> Lundi - Vendredi 9:00 - 19:00 </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> 02 99 42 41 83 </p>

            <h4 class="lead"> E-mail : </h4>
            <p> joel.quellard@sfr.fr </p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>