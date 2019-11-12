<?php 

require_once(MODEL.'TextManager.php'); 

class Home 
{
    public function showHome()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $text1 = $textManager->getText1();
        $footer = $textManager->showFooter();
        $slide1 = $textManager->getSliderImage(1);
        $slide2 = $textManager->getSliderImage(2);
        $slide3 = $textManager->getSliderImage(3);
        $slide4 = $textManager->getSliderImage(4);

        require(VIEW.'home.php');
    }

    public function showPresentation()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $text2 = $textManager->getText2();
        $footer = $textManager->showFooter();

        require(VIEW.'presentation.php');
    }

    public function showContact()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $pos = $textManager->getPosition();
        $footer = $textManager->showFooter();

        require(VIEW.'contact.php');
    }

    public function showPortfolio()
    {
        $textManager = new P5OC\site\Model\TextManager();
        $footer = $textManager->showFooter();
        $images = $textManager->getImages();

        require(VIEW.'portfolio.php');
    }
}
