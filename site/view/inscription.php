<?php $title = 'Présentation'; ?>

<?php ob_start(); ?>
<img class="logo" width="100" height="100" src="assets/img/logo.png">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
            <div class="inner">
            <h1 class="masthead-brand">Menuiserie Quellard</h1>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php?action=showHome">Accueil</a>
                <a class="nav-link active" href="index.php?action=showPresentation">Présentation</a>
                <a class="nav-link active" href="index.php?action=showPortfolio">Portfolio</a>
                <a class="nav-link active" href="index.php?action=showContact">Contact</a>
            </nav>
            </div>
    </header>

    <div class="container2 inscription" align="center">
        <h2 class="titreInscription">Inscription</h2>
        <div class="formInscription">
            <form  method="POST" action="index.php?action=inscription">   
                <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo"/>
                     
                <input type="email" placeholder="Votre mail" id="mail" name="mail"/>
                        
                <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2"/>           
                    
                <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />                                  
                    
                <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                    
                <br />
                <input class="button1" type="submit" name="forminscription" value="Je m'inscris" />
            </form>
        </div>
    </div>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <h4 class="lead"> Adresse : </h4>
            <p> 9 RUE DU CHAMP GUIHORE 35320 CREVIN </p>

            <h4 class="lead"> Horaires d'ouverture : </h4>
            <p> Lundi - Vendredi 9:00 - 19:00 </p>

            <h4 class="lead"> Appellez-nous : </h4>
            <p> 02 99 42 41 83 </p>

            <h4 class="lead"> E-mail : </h4>
            <p> joel.quellard@sfr.fr </p>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'template.php'); ?>

