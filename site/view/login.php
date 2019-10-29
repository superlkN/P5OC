<?php $title = 'Login'; ?>

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
            </nav>
            </div>
    </header>
      
    <div class="container2 connexion" align="center">
        <h2 class="titreLogin">Connexion</h2>
        <br /><br />
        <form method="POST" action="index.php?action=login">
        <input type="email" name="mailconnect" placeholder="Mail" />
        <input type="password" name="mdpconnect" placeholder="Mot de passe" />
        <br /><br />
        <input class="button1" type="submit" name="formconnexion" value="Se connecter !" />
        </form>
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
        <?php if (!isset($_SESSION['id'])) { ?>
        <a class="bouton-inscription" href="index.php?action=showInscription"><i class="far fa-edit"></i></a>
        <?php } ?>
        <?php if (isset($_SESSION['id'])) { ?>
        <a class="bouton-logout" href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i></a>
        <?php } ?>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>