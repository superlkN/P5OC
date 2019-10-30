<?php $title = 'Présentation'; ?>

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

    
        <form class="formEdit" action="index.php?action=modifyText2" method="post">
            <div class="contentEdit">
                <textarea id="textarea" class="content" name="content"><?= $text2['content'] ?></textarea>
            </div>
            <div>
                <input class="button1" type="submit" value="Modifier" />
            </div>
        </form>
     
    
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
    </footer>
</div>

<script>
tinymce.init({
    selector: '#textarea',
    height:500,
    forced_root_block : false,
    force_br_newlines : true,
    force_p_newlines : false,
    
});
</script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>