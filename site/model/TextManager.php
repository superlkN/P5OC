<?php


namespace P5OC\site\Model;

require_once(MODEL."Manager.php");

class TextManager extends Manager 
{
    public function getText1() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, content FROM texte WHERE id = 1');
        $req->execute();
        $text1 = $req->fetch();

        return $text1;
    }

    public function getText2() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, content FROM texte WHERE id = 2');
        $req->execute();
        $text2 = $req->fetch();

        return $text2;
    }

    public function getTexts() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, content FROM texte ORDER BY id');
        $req->execute();

        return $req;
    }

    /**
     *  Met à jour un chapitre dans la bdd
     * 
     * @param String $title titre du chapitre
     * @param String $content contenu du chapitre
     * @param int $id identifiant de l'entité
     * 
     * @return array return le titre, le contenu, et l'id 
     * 
     */

    public function editText1($content) 
    {
        $db = $this->dbConnect();
        $text1 = $db->prepare('UPDATE texte SET content = ? WHERE id = 1');
        $affectedText = $text1->execute(array($content));

        return $affectedText;
    }

    public function editText2($content) 
    {
        $db = $this->dbConnect();
        $text2 = $db->prepare('UPDATE texte SET content = ? WHERE id = 2');
        $affectedText = $text2->execute(array($content));

        return $affectedText;
    }

    public function getPosition() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT latitude, longitude FROM contact');
        $req->execute();
        $pos = $req->fetch();


        return $pos;
    }

    public function editLatLong($latitude, $longitude) {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE contact SET latitude = ?, longitude = ? WHERE id = 1');
        $affectedLatLong = $req->execute(array($latitude, $longitude));

        return $affectedLatLong;
    }

    public function showFooter() 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT adresse, horaires, numero, mail FROM footer');
        $req->execute();
        $footer = $req->fetch();

        return $footer;
    }

    public function editFooter($adresse, $horaires, $numero, $email)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE footer SET adresse = ?, horaires = ?, numero = ?, mail = ? WHERE id = 1');
        $footerEdit = $req->execute(array($adresse, $horaires, $numero, $email));

        return $footerEdit;
    }

    public function getImages() 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, petite_image, grande_image FROM portfolio ORDER BY id');
        $req->execute();

        return $req;
    }

    public function getImage($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, petite_image, grande_image FROM portfolio WHERE id = ?');
        $req->execute(array($id));

        return $req;
    }

    public function updateImage($petiteImage, $grandeImage, $id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE portfolio SET petite_image = ?, grande_image = ? WHERE id = ?');
        $img = $req->execute(array($petiteImage, $grandeImage, $id));

        return $img;
    }
}