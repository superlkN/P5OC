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
                <?php if (isset($_SESSION['id'])) { ?>
                <a class="nav-link active" href="index.php?action=showDash">Dashboard</a>
                <?php } ?>
            </nav>
            
            </div>
    </header>

    <div style="text-align:center">
        <h2 class="titrePres">Portfolio :</h2>
        <p>Cliquez sur une image si dessous:</p>
    </div>

        <!-- The four columns -->
        <div class="row">
            <div class="column">
                <img src="assets/img/1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/5.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/6.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/7.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="assets/img/8.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
            </div>
        </div>

        <div class="container">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img id="expandedImg" style="width:80%">
            <div id="imgtext">
        </div>
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

<script src="assets/js/portfolio.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>