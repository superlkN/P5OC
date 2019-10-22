<?php $title = 'Réalisations'; ?>

<?php ob_start(); ?>

<h1> Nos réalisations : </h1>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>