<?php $title = 'Slider'; ?>

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
        <div style="text-align:center">
            <h2 class="titrePres">Slider :</h2>
        </div>

        <div class="container2">
            <form class="formEditImg" method="POST" action="index.php?action=updateSliderImages&amp;id=<?= $image['id'] ?>" enctype="multipart/form-data">

                <label for="slide">Slide : </label>
                <input type="file" id="slide" name="slide"/>

                <br>

                <input class="button1" type="submit" name="upload" value="Changez l'image" />
            </form>
        </div>
    </section>   

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p> Copyrite Quellard Corentin @ 2019 </p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>