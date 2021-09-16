<link href="style.css" rel="stylesheet">
<?php

class Personnage
{
// les attributs et méthode ici
    private $_id = 0;
    private $_nom = "Inconnu";
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;
    private $niveau = 0;


    const FORCE_FAIBLE = 30;
    const FORCE_MOYENNE = 50;
    const FORCE_FORTE = 100;

    private static $_textadire = "Prépare toi à mourir !";
    private static $_nbrJ = 0;
//méthode
    public function __construct($nom, $force = 50, $degats = 1)
    {
        $this->_nom = $nom;
        $this->_force = $force;
        $this->_degats = $degats;
        $this->_experience = 1;
        print("<p class='red'>Le personnage ".$nom . " à était créer !</p>");
        self::$_nbrJ++;
    }
    public function setid (int $id):Personnage
    {
        if (!is_int($id)){
            trigger_error("error");
            return $this;
         }
         $this->_id = $id;
    }
    public function getid()
    {
        return $this->_id;
    }
    public function setniv ($niveau):Personnage
    {
     if (!is_int($niveau)){
        trigger_error("error");
        return $this;
     }
     $this->niveau = $niveau;
    }
    public function getniv():int
    {
        return $this->niveau;
    }
    public function setnom($nom):Personnage
    {
        if (is_string($nom)) {
            trigger_error('le nom doit etre du texte');
            return $this;
        }
        $this->_nom = $nom;
    }
    public function getnom():string
    {
        return $this->_nom;
    }
    public function setXP($xp):Personnage
    {
        if (!is_int($xp)) {
            trigger_error('ce doit etre un chiffre');
            return $this;
        }
        $this->_experience = $xp;
    }
    public function getXP():int
    {
        return $this->_experience;
    }
    public function getDegats():int
    {
        return $this->_degats;
    }
    public function getForce():int
    {
        return $this->_force;
    }
    public function setForce(int $force):Personnage{
        if (!is_int($force)){
            trigger_error("erreur");
            return $this;
        }
        if ($force > 100){
            trigger_error("error");
            return $this;
        }
        if (is_array($force, array(self::FORCE_FAIBLE, self::FORCE_MOYENNE, self::FORCE_FORTE))){
            $this->_force = $force;
        }
        else{
            trigger_error('error +');
        }
        return $this;
    }
    public function setDegats(int $degats):Personnage
    {
        if (!is_int($degats)) {
            trigger_error('ce doit etre un chiffre');
            return $this;
        }
        $this->_degats = $degats;
    }
    public function afficherstat() 
    {
        print("----------------------------------<br>");
        print("Statistique : <br>");
        print("nom : " . $this->getnom(). "<br>");
        print("dehgats : ".$this->getDegats()."<br>");
        print("XP : ".$this->getXP()."<br>");
        print("force : ".$this->getForce()."<br>");
        print("-----------------------------------<br>");
    }
    public function definirForce(int $force)
    {
        $this->_force = $force;
    }
    public function definirDegat(int $degat)
    {
        $this->_degats = $degat;
    }
    public function definirXp(int $xp)
    {
        $this->_experience = $xp;
    }
    public static function parler()
    {
        print("Je suis le personnage n°".self::$_nbrJ." ".self::$_textadire."<br>");
    }
    public function gagnerXp()
    {
        $this->_experience++;
        return $this->_experience;
    }
    public function afficherXp()
    {
        print("Experience : " . $this->_experience);
    }
    public function __toString()
    {
        return $this->getnom();
    }
    public function frapper(Personnage $Victime):Personnage
    {
        $Victime->_degats = $Victime->_degats + $this->_force;
        $this->gagnerXp();
        print($this->getnom() . " à bruler vivant -> " . $Victime->getnom() . " = " . $Victime->getDegats()." Experience : ".$this->getXP()."<br>"); 
        $this->afficherstat();
        $Victime->afficherstat();
        return $this;
    }

}
