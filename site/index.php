<?php

include_once('config.php');
require_once(CONTROLLER.'Home.php');

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

        switch ($action)
        {
            case "showHome":
            $home->showHome();
            break;

            case "showPresentation":
            $home->showPresentation();
            break;
        }
    }
}

catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}