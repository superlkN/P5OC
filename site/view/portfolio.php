<?php $title = 'Réalisations'; ?>

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

    <main role="main" class="inner cover">
       
    </main>

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