<?php 

require_once(MODEL.'TextManager.php'); 

class Home 
{
    public function showHome()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $text1 = $textManager->getText1();

        require(VIEW.'home.php');
    }

    public function showPresentation()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $text2 = $textManager->getText2();

        require(VIEW.'presentation.php');
    }

    public function showContact()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $pos = $textManager->getPosition();
        require(VIEW.'contact.php');
    }

    public function showPortfolio()
    {
        require(VIEW.'portfolio.php');
    }

    public function showGalerie()
    {
        require(VIEW.'galerie.php');
    }
}

