<?php $title = 'Menuiserie Quellard'; ?>

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

    <section id="slider">
        <div class="container3">

            <?php while ($image = $images->fetch())
            {
            ?>       
            <div class="slides">
                <img src="assets/img/<?= $image['chemin'] ?>" style="width:100%" alt="photo-chantier" />
            </div>    
            <?php 
            }
            ?>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <br>

        <div id="myDots" style="text-align:center"></div>
        
    </section>

    <div class="presentation-home">
        <h2> Bienvenue sur le site web de la Menuiserie Quellard : </h2>

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
            <p> <?php echo $footer['adresse'] ?> </p>

            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> <?php echo $footer['horaires'] ?> </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> <?php echo $footer['numero'] ?> </p>

            <h4 class="lead"> E-mail : </h4>
            <p> <?php echo $footer['mail'] ?> </p>
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