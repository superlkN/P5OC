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

    public function showContact()
    {
        require(VIEW.'contact.php');
    }

    public function showPortfolio()
    {
        require(VIEW.'portfolio.php');
    }
}

