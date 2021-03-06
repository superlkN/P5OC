<?php $title = 'Contact'; ?>

<?php ob_start(); ?>
<body onload="initMap()">
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
        
        <section>
        <main role="main" class="inner cover">
        <div class="container2">
          <h2>Contactez nous :</h2>
          <form class="formContact" method="post" action="index.php?action=formEmail">
              <label for="name">Nom:</label>
              <input type="text" name="name" id="name" required placeholder="Nom" />
            
              <label for="subject">Objet Du Message:</label>
              <input type="text" name="subject" id="subject" required placeholder="Sujet" />
            
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" required placeholder="email@exemple.com" />
            
              <label for="message">Message:</label>
              <textarea name="message" id="message" required></textarea>
            
              <input type="submit" value="Envoyer Mon Message" />
          </form>
        </div>

        <h2> Où nous trouver ?</h2>

        <div id="map" class="map"></div>
        
        <script>

        function initMap() {

            var lat = <?= $pos['latitude'] ?> ;
            var long = <?= $pos['longitude'] ?> ;
            var menuiserie = [lat, long];
            
            window.map = new L.map("map").setView(menuiserie, 16);
            L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
                maxZoom: 16,
                minZoom: 10
            }).addTo(map);

            var marker = L.marker(menuiserie)
            .bindPopup('<h3>Menuiserie Quellard</h3>')
            .addTo(map);

          }
        </script>
        </main>
        </section>

        <footer class="mastfoot mt-auto">
            <div class="inner">
              <h4 class="lead"> Adresse : </h4>
              <p> <?php echo $footer['adresse'] ?> </p>

              <h4 class="lead"> Horaires d'ouverture : </h4>
              <p> <?php echo $footer['horaires'] ?> </p>

              <h4 class="lead"> Appellez-nous : </h4>
              <p> <?php echo $footer['numero'] ?> </p>

              <h4 class="lead"> E-mail : </h4>
              <p> <?php echo $footer['mail'] ?> </p>
            </div>
        </footer> 
  </div>
</body>

<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>