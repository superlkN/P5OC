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
}