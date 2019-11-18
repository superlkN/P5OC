<?php $title = 'Présentation'; ?>

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
                <?php if (isset($_SESSION['id']) && $_SESSION['isadmin'] == 1) { ?>
                <a class="nav-link active" href="index.php?action=showDash">Dashboard</a>
                <?php } ?>
            </nav>
            </div>
    </header>

    <section>               
        <div class="presentation">

        <h2> Présentation : </h2>

        <iframe width="950px" height="600px" src="https://www.youtube.com/embed/QhEVJsph5-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>

        <p> 
            <?= $text2['content'] ?>
        </p>

        <img class="logorge" width="100" height="100" src="assets/img/rge.png" alt="logo RGE">

        </div>

    </section> 
    <footer class="mastfoot mt-auto">
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

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>