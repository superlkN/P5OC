<?php $title = 'Portfolio'; ?>

<?php ob_start(); ?>
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

    <section class="sectionPortfolio">               
        <div style="text-align:center">
            <h2 class="titrePres">Portfolio :</h2>
            <p>Cliquez sur une image si dessous:</p>
        </div>

        <div id="lightgallery" class="portfolio">
            <?php while ($image = $images->fetch())
            {
            ?>       
                <a href="assets/img/<?= $image['petite_image'] ?>" alt="photo-portfolio">
                    <img class="imgPortfolio" src="assets/img/<?= $image['grande_image'] ?>" alt="photo-portfolio" />
                </a>
            <?php 
            }
            ?>
        </div>
    </section> 

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
    </footer>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery(); 
    });
</script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>