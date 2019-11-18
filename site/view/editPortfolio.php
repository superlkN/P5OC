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

    <section>              
        <div style="text-align:center">
            <h2 class="titrePres">Portfolio :</h2>
            <p>Cliquez sur une image si dessous:</p>
        </div>

        <a class="boutonAdd" href="index.php?action=viewAddImage"> Ajoutez une nouvelle image </a>
                
        <div class="container-image">

        <?php while ($image = $images->fetch())
        {
        ?>
    
        <div class="imagesDash">     
            <a href="assets/img/<?= $image['petite_image'] ?>">
                <img class="imgPortfolio" src="assets/img/<?= $image['grande_image'] ?>" />  
            </a>  
            <a class="boutonImage" href="index.php?action=showFormEditImage&amp;id=<?= $image['id'] ?>">Update</a>
            <br>
            <a class="boutonDelete" href="index.php?action=deleteImagesPortfolio&amp;id=<?= $image['id'] ?>">Supprimer</a>   
        </div> 
            
        <?php 
        }
        ?>

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