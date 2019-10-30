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
            $user->modifyText1($_POST['content']);
            break;

            case "modifyText2":
            $user->modifyText2($_POST['content']);
            break;
        }
    }
}

catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}

?>

