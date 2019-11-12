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

    <div class="container2">
    <form  method="POST" action="index.php?action=updateImage&amp;id=<?= $image['id'] ?>" enctype="multipart/form-data">

        <label for="petite_image">Petite image: </label>
        <input type="file" id="petite_image" name="petite_image"/>

        <br>
                     
        <label for="grande_image">Grande image: </label>
        <input type="file" id="grande_image" name="grande_image"/>
                    
        <br />

        <input class="button1" type="submit" name="upload" value="Changez l'image" />
    </form>
    </div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p> Copyrite Quellard Corentin @ 2019 </p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>