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
}