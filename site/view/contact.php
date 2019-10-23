<?php $title = 'Contact'; ?>

<?php ob_start(); ?>

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Menuiserie Quellard</h3>
          <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentations</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
          </nav>
        </div>
      </header>

<main role="main" class="inner cover">

<div class="container">
  <h3>Contactez nous :</h3>
  <form action="/action_page.php">
    <label for="fname">Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..">

    <label for="lname">Nom</label>
    <input type="text" id="nom" name="nom" placeholder="Votre nom..">

    <label for="mail">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Votre adresse e-mail">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Ecrivez nous quelque chose.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</main>

<footer class="mastfoot mt-auto">
    <div class="inner">
        <h4 class="lead"> Horaires d'ouverture : </h4>
        <p> Lundi - Vendredi 9:00 - 19:00 </p>

        <h4 class="lead"> Appellez-nous : </h4>
        <p> 02 99 42 41 83 </p>

        <h4 class="lead"> E-mail : </h4>
        <p> blablabla@gmail.com </p>
    </div>
</footer>

</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>