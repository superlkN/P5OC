<?php $title = 'Présentation'; ?>

<?php ob_start(); ?>

<h1> Presentation : </h1>

<p> Société à responsabilité limitée unipersonnelle est active depuis 2013.
Établie à CREVIN (35320), elle est spécialisée dans le secteur d'activité des travaux de menuiserie bois et pvc. Son effectif est compris entre 3 et 4 salariés.
</p>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>