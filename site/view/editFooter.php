<?php $title = 'Edition latitude longitude'; ?>

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
        <form class="formEdit" action="index.php?action=footerEdit" method="post">
            <div class="contentEdit">
                <label for="adresse">Adresse: </label>
                <textarea id="textarea" class="adresse" name="adresse"> <?= $footer['adresse'] ?> </textarea>
                <label for="horaires">Horaires: </label>
                <textarea id="textarea" class="horaires" name="horaires"> <?= $footer['horaires'] ?> </textarea>
                <label for="numero">Numero de telephone: </label>
                <textarea id="textarea" class="numero" name="numero"> <?= $footer['numero'] ?> </textarea>
                <label for="mail">Adresse e-mail: </label>
                <textarea id="textarea" class="mail" name="mail"> <?= $footer['mail'] ?> </textarea>
            </div>
            <div>
                <input class="button1" type="submit" value="Modifier" />
            </div>
        </form>
    </section>
    
    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p> Copyrite Quellard Corentin @ 2019 </p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>