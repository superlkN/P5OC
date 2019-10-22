<?php $title = 'Contact'; ?>

<?php ob_start(); ?>

<h1> Nous contacter : </h1>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>