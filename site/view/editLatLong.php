<?php $title = 'Edition latitude longitude'; ?>

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

    <section>
        <form class="formEdit" action="index.php?action=modifyLatLong" method="post">
            <div class="contentEdit">
                <textarea id="textarea" class="latitude" name="latitude"> <?= $pos['latitude'] ?> </textarea>
                <textarea id="textarea" class="longitude" name="longitude"> <?= $pos['longitude'] ?> </textarea>
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