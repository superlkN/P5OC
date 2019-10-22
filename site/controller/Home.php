<?php 

class Home 
{
    public function showHome()
    {
        require(VIEW.'home.php');
    }

    public function showPresentation()
    {
        require(VIEW.'presentation.php');
    }
}

