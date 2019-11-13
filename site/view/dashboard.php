<?php $title = 'Dashboard'; ?>

<?php ob_start(); ?>
<img class="logo" width="100" height="100" src="assets/img/logo.png" alt="logo entreprise">
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

    <section>

    <a class="buttonDash" href="index.php?action=viewText1">Modifier le texte de la page d'accueil</a>

    <br>

    <a class="buttonDash" href="index.php?action=viewText2">Modifier le texte de la page présentation</a>

    <br>
    
    <a class="buttonDash" href="index.php?action=viewLatLong">Modifier la latitude et la longitude de la carte de la page contact</a>

    <br>
    
    <a class="buttonDash" href="index.php?action=viewFooterEdit">Modifier le bas de page</a>

    <br>
    
    <a class="buttonDash" href="index.php?action=viewEditPortfolio">Modifier la galerie d'images</a>

    <br>
    
    <a class="buttonDash" href="index.php?action=showFormEditSlider">Modifier le slider</a>

    </section>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p> Copyrite Quellard Corentin @ 2019 </p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>