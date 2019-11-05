<?php $title = 'Portfolio'; ?>

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

    <p> yo </p>

    <footer class="mastfoot mt-auto">
        <div class="inner">
        <h4 class="lead"> Adresse : </h4>
            <p> Copyrite Quellard Corentin @ 2019 </p>
        </div>
    </footer>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery(); 
    });
</script>

<script src="assets/js/portfolio.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>