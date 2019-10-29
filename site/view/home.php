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
            <img id="imgSlider" src="assets/img/1.jpg" alt="images_entreprise">
            <div class="boutons-slider">
                <a class="fas fa-backward fa-2x" id="fleche-gauche"></a>
                <a class="fas fa-forward fa-2x" id="fleche-droite"></a>
            </div>
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
            <p> 9 RUE DU CHAMP GUIHORE 35320 CREVIN </p>

            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> Lundi - Vendredi 9:00 - 19:00 </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> 02 23 30 92 60 </p>

            <h4 class="lead"> E-mail : </h4>
            <p> joel.quellard@sfr.fr </p>
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

<script src="assets/js/slider.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>