<?php $title = 'Réalisations'; ?>

<?php ob_start(); ?>

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
            <div class="inner">
            <h3 class="masthead-brand">Menuiserie Quellard</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentations</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
            </nav>
            </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Nos réalisations :</h1>
        <p class="lead">Société à responsabilité limitée unipersonnelle est active depuis 2013.
            Établie à CREVIN (35320), elle est spécialisée dans le secteur d'activité des travaux de menuiserie bois et pvc. Son effectif est compris entre 3 et 4 salariés.
        </p>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Copyright 2019</p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>