<?php $title = 'Menuiserie Quellard'; ?>

<?php ob_start(); ?>

<div class="home">
    <h1 class="titre-home"> Menuiserie Quellard </h1>
    <a class="bouton-home" href="index.php?action=showPresentation"> En savoir plus </a>
</div>


<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>