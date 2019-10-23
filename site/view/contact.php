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

        <h1 class="cover-heading">Nous contacter :</h1>
        
        <form class="form" action="/ma-page-de-traitement" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
        </form>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Copyright 2019</p>
        </div>
      </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>