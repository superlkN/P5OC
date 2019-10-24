<?php $title = 'Contact'; ?>

<?php ob_start(); ?>

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h1 class="masthead-brand">Menuiserie Quellard</h1>
          <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentations</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
          </nav>
        </div>
      </header>

      <i class="fas fa-sign-in-alt"></i>

      <main role="main" class="inner cover">

      <div class="container">
        <h2>Contactez nous :</h2>
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

      <h2> Où nous trouver ?</h2>

      <div id="map" class="map"></div>

      </main>

      <footer class="mastfoot mt-auto">
          <div class="inner">
              <h4 class="lead"> Adresse : </h4>
              <p> 9 RUE DU CHAMP GUIHORE 35320 CREVIN </p>

              <h4 class="lead"> Horaires d'ouverture : </h4>
              <p> Lundi - Vendredi 9:00 - 19:00 </p>

              <h4 class="lead"> Appellez-nous : </h4>
              <p> 02 99 42 41 83 </p>

              <h4 class="lead"> E-mail : </h4>
              <p> blablabla@gmail.com </p>
          </div>
      </footer>
</div>

<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
<script src="assets/js/map.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>