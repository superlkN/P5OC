<?php

session_start();

include_once('config.php');
require_once(CONTROLLER.'Home.php');
require_once(CONTROLLER.'UserController.php');

try 
{
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else 
    {
        $home = new Home;
        $home->showHome();
    }

    if(isset($action))
    {
        $home = new Home;
        $user = new UserController;

        switch ($action)
        {
            case "showHome":
            $home->showHome();
            break;

            case "showPresentation":
            $home->showPresentation();
            break;

            case "showContact":
            $home->showContact();
            break;

            case "showPortfolio":
            $home->showPortfolio();
            break;

            case "showGalerie":
            $home->showGalerie();
            break;
            
            case "showLogin":
            $user->showLogin();
            break;

            case "login":
            if (isset($_POST['formconnexion'])) {
                $user->checklogin($_POST['mailconnect']);
            }
            break;

            case "showInscription":
            $user->showInscription();
            break;

            case "logout":
            $user->logout();
            break;

            case "inscription":
            if (isset($_POST['forminscription'])) {
                $user->inscription($_POST['pseudo'], $_POST['mail'], $_POST['mdp']);
            }
            break;

            case "showDash":
            $user->showDash();
            break;

            case "dashboard":
            $user->dashboard($_GET['id']);
            break;

            case "formEmail":
            $user->formEmail();
            break;

            case "viewText1":
            $user->viewText1();
            break;

            case "viewText2":
            $user->viewText2();
            break;

            case "modifyText1":
                if(!empty($_POST['content']))
                    {
                        $user->modifyText1($_POST['content']);
                    }
                    else
                    {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
            break;

            case "modifyText2":
                if(!empty($_POST['content']))
                    {
                        $user->modifyText2($_POST['content']);
                    }
                    else
                    {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
            
            break;

            case "viewLatLong":
            $user->viewLatLong();
            break;

            case "modifyLatLong":
                if(!empty($_POST['longitude']) && !empty($_POST['latitude']))
                    {
                        $user->modifyLatLong($_POST['latitude'],$_POST['longitude']);
                    }
                    else
                    {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }    
            break;

            case "footerEdit":
                if(!empty($_POST['adresse']) && !empty($_POST['horaires']) && !empty($_POST['numero']) && !empty($_POST['mail']))
                    {
                        $user->footerEdit($_POST['adresse'], $_POST['horaires'], $_POST['numero'], $_POST['mail']);
                    }
                    else
                    {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
            break;

            case "viewFooterEdit": 
            $user->viewFooterEdit();
            break;

            case "viewEditPortfolio":
            $user->viewEditPortfolio();
            break;

            case "showFormEditImage":
            if(!empty($_GET['id']) && $_GET['id'] > 0)
            {
            $user->showFormEditImage($_GET['id']);
            }
            else {
                throw new Exception('Aucune image sélectionnée');
            }
            break;

            case "updateImage":
            $user->updateImage($_FILES['petite_image'], $_FILES['grande_image'], $_GET['id']);
            break;

            case "showEditSlider":
            $user->showEditSlider();
            break;

            case "showFormEditSlider":
            if(!empty($_GET['id']) && $_GET['id'] > 0)
            {
            $user->showFormEditSlider($_GET['id']);
            }
            else {
                throw new Exception('Aucune image sélectionnée');
            }
            break;

            case "updateSliderImages":
            $user->updateSliderImages($_FILES['slide'], $_GET['id']);
            break;

            case "viewAddImage":
            $user->viewAddImage();
            break;

            case "createImagePortfolio":
            $user->createImagePortfolio($_FILES['petite_image'], $_FILES['grande_image']);
            break;

            case "deleteImagesPortfolio":
            $user->deleteImagesPortfolio($_GET['id']);
            break;

            case "viewAddSlide":
            $user->viewAddSlide();
            break;

            case "createImageSlider":
            $user->createImageSlider($_FILES['slide']);
            break;

            case "deleteImagesSlider":
            $user->deleteImagesSlider($_GET['id']);
            break;

        }
    }
}

catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}

?>

