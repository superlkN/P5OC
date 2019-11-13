<?php

require_once(MODEL.'AuthManager.php');
require_once(MODEL.'TextManager.php');

class UserController 
{
    public function showInscription()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $footer = $textManager->showFooter();

        require(VIEW.'inscription.php');
    }

    /**
     *  Inscription de l'utilisateur
     * 
     */

    public function inscription($pseudo, $mail, $mdp_hash) 
    {
        $authManager = new P5OC\site\Model\AuthManager();
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = $_POST['mdp'];
        $mdp2 = $_POST['mdp2'];
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])) {
            $pseudolength = strlen($pseudo);
            if($pseudolength <= 255) {
                if($mail == $mail2) {
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $authMail = $authManager->getMail($mail);
                        
                     
                    if(empty($authMail)) {
                        if($mdp == $mdp2) {
                            $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);
                            $authUser = $authManager->getUser($pseudo, $mail, $mdp_hash);
                            header('Location:index.php?action=showLogin');
                            exit;
                            
                        } else {
                            echo "Vos mots de passes ne correspondent pas !";
                            header("refresh:2;url=index.php?action=showInscription");
                            exit;
                            
                        }
                    } else {
                        echo "Adresse mail déjà utilisée !";
                        header("refresh:2;url=index.php?action=showInscription");
                        exit;
                    }
                    } else {
                        echo "Votre adresse mail n'est pas valide !";
                        header("refresh:2;url=index.php?action=showInscription");
                        exit;
                    }
                } else {
                    echo "Vos adresses mail ne correspondent pas !";
                    header("refresh:2;url=index.php?action=showInscription");
                    exit;
                }
            } else {
                echo "Votre pseudo ne doit pas dépasser 255 caractères !";
                header("refresh:2;url=index.php?action=showInscription");
                exit;
            }
        } else {
            echo "Tous les champs doivent être complétés !";
            header("refresh:2;url=index.php?action=showInscription");
            exit;
        }   
    }

    public function showLogin()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $footer = $textManager->showFooter();

        require(VIEW.'login.php');
    }

     /**
     *  Connexion de l'utilisateur 
     * 
     */

    public function checkLogin($mailconnect)
    {

        $authManager = new P5OC\site\Model\AuthManager();
        $mailconnect = $_POST['mailconnect'];
        $mdpconnect = $_POST['mdpconnect'];
        

        if(!empty($mailconnect) && !empty($mdpconnect)) {

            $auth = $authManager->checkLoginManager($mailconnect);
            
            if(!empty($auth)) {
                if (password_verify($mdpconnect, $auth['motdepasse'])) {

                    $_SESSION['isadmin'] = $auth['isadmin'];

                    if ($_SESSION['isadmin'] == 1) {
                        $_SESSION['id'] = $auth['id'];
                        $_SESSION['pseudo'] = $auth['pseudo'];
                        $_SESSION['mail'] = $auth['mail'];
                        header("Location: index.php?action=showDash");
                        exit;
                    } else {
                        $_SESSION['id'] = $auth['id'];
                        $_SESSION['pseudo'] = $auth['pseudo'];
                        $_SESSION['mail'] = $auth['mail'];
                        header("Location: index.php");
                        exit;
                    }
                } else {
                    echo "Mauvais mail ou mot de passe !";
                    header("refresh:2;url=index.php?action=showLogin");
                    exit;
                }
            } else {
                echo "Mauvais Mail ou mot de passe !";
                header("refresh:2;url=index.php?action=showLogin");
                exit;
            } 
        } else {
            echo "Tous les champs doivent être complétés !";
            header("refresh:2;url=index.php?action=showLogin");
            exit;
        }      
    }
    public function logout() 
    {
        $_SESSION = array();
        session_destroy();
        header("Location: index.php?action=showLogin");
        exit;
    }

        /**
     *  Affiche la vue dashboard
     * 
     */

    public function showDash()
    {

        if ($_SESSION['isadmin'] == 1)
        {
            $textManager = new P5OC\site\Model\TextManager();
            $text1 = $textManager->getText1();
            $text2 = $textManager->getText2();

            $textManager = new P5OC\site\Model\TextManager();
            $pos = $textManager->getPosition();

            require(VIEW.'dashboard.php');
        } 
        else 
        {
            echo "Vous n'avez pas accès à cette page, vous allez être redirigé à la page d'accueil.";
            header( "refresh:3;url=index.php" );
        }
    }

    /**
     *  S'il y a un id en GET, lance la méthode dashboardManager()
     * 
     */

    public function dashboard($getid) 
    {
        $authManager = new P5OC\site\Model\AuthManager();
        
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            $getid = intval($_GET['id']);
            $dashboard = $authManager->dashboardManager($getid);
        }
    }

    public function formEmail()
    {
        $destinataire = 'superlkn35@domain.com';
        // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
        $expediteur = $_POST['email'];
        
        $objet = $_POST['subject'];
        
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
        $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n"; // Expediteur
        
        $message = 	'<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '.$_POST['name'].'!<br>
                        '.$_POST['message'].'</div>';
        
         if(mail($destinataire, $objet, $message, $headers))
        {
            echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
        }
        else // Non envoyé
        {
            echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
        }
        header('refresh:3;url=index.php?action=showContact');
    }

    /**
     *  Affiche le vue d'edition du text 1 et 2
     * 
     */

    public function viewText1()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $text1 = $textManager->getText1();

        require(VIEW.'editText1.php');
    }

    public function viewText2()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $text2 = $textManager->getText2();

        require(VIEW.'editText2.php');
    }

    /**
     *  Modifie le text 1 et 2
     * 
     */

    public function modifyText1($content)
    {
        $textManager = new P5OC\site\Model\TextManager();
      
        $affectedText = $textManager->editText1($content);

        header('Location:index.php?action=showDash');
        exit; 
        
    }

    public function modifyText2($content)
    {
        $textManager = new P5OC\site\Model\TextManager();
      
        $affectedText = $textManager->editText2($content);

        header('Location:index.php?action=showDash');
        exit; 
        
    }

    public function viewLatLong()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $pos = $textManager->getPosition();

        require(VIEW.'editLatLong.php');
    }

    public function modifyLatLong($latitude, $longitude)
    {
        $textManager = new P5OC\site\Model\TextManager();

        $affectedPosition = $textManager->editLatLong($latitude, $longitude);

        header('Location: index.php?action=showDash');
        exit;
    }

    public function viewFooterEdit()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $footer = $textManager->showFooter();

        require(VIEW.'editFooter.php');
    }

    public function footerEdit($adresse, $horaires, $numero, $email)
    {
        $textManager = new P5OC\site\Model\TextManager();

        $footerEdited = $textManager->editFooter($adresse, $horaires, $numero, $email);

        header('Location: index.php?action=showDash');
        exit;
    }

    public function viewEditPortfolio() 
    {
        $textManager = new P5OC\site\Model\TextManager();
        $images = $textManager->getImages();

        require(VIEW.'editPortfolio.php');
    }

    public function showFormEditImage($id) 
    {
        $textManager = new P5OC\site\Model\TextManager();
        $image = $textManager->getImage($_GET['id']);

        require(VIEW.'formEditImage.php');
    }

    public function updateImage($petiteImage, $grandeImage, $id)
    {   
        $petiteImage = $this->upload('petite_image');
        $grandeImage = $this->upload('grande_image');
       
        $textManager = new P5OC\site\Model\TextManager();
        $images = $textManager->updateImages($petiteImage , $grandeImage, $id);

        header('Location:index.php?action=viewEditPortfolio');
        exit;
    }

    private function upload($cible)
    {
        if( isset($_POST['upload']) ) // si formulaire soumis
        {
            $content_dir = 'assets/img/'; // dossier où sera déplacé le fichier

            $tmp_file = $_FILES[$cible]['tmp_name'];

            if( !is_uploaded_file($tmp_file) )
            {
                exit("Le fichier est introuvable");
            }

            // on vérifie maintenant l'extension
            $type_file = $_FILES[$cible]['type'];

            if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') && !strstr($type_file, 'png'))
            {
                exit("Le fichier n'est pas une image");
            }

            // on copie le fichier dans le dossier de destination
            $name_file = $_FILES[$cible]['name'];
            $name_file = time() . $name_file;

            if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
            {
                exit("Impossible de copier le fichier dans $content_dir");
            }
            
            echo "Le fichier a bien été uploadé";

            return $name_file;
        }
    }

    public function showFormEditSlider()
    {
        require(VIEW.'formEditSlider.php');
    }

    public function updateSliderImages($premiereSlide, $deuxiemeSlide, $troisiemeSlide, $quatriemeSlide)
    {
        $premiereSlide = $this->upload('premiere_slide');
        $deuxiemeSlide = $this->upload('deuxieme_slide');
        $troisiemeSlide = $this->upload('troisieme_slide');
        $quatriemeSlide = $this->upload('quatrieme_slide');
       
        $textManager = new P5OC\site\Model\TextManager();
        $slider = $textManager->updateSliderImage($premiereSlide, $deuxiemeSlide, $troisiemeSlide, $quatriemeSlide);

        header('Location:index.php?action=showDash');
        exit;
    }
}