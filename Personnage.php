<?php

class Personnage
{
// les attributs et méthode ici
    private $_nom = "Inconnu";
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;

//méthode
    public function __construct($nom,$force = 50,$degats = 1)
    {
        $this->_nom =  $nom;
        $this->_force = $force;
        $this->_degats = $degats;
        $this->_experience = 1;
        print($nom. " à était créer<br>");
    }
    public function setnom($nom)
    {
        if (is_string($nom))
        {
            trigger_error('le nom doit etre du texte');
            return;
         }
        $this->_nom = $nom;
    }
    public function getnom()
    {
        return $this->_nom;
    }
    public function setXP($xp)
    {
        if (!is_int($xp)){
            trigger_error('ce doit etre un chiffre');
            return;
        }
        $this->_experience = $xp;
    }
    public function getXP()
    {
        return $this->_experience;
    }
    public function getDegats()
    {
        return  $this->_degats;
    }
    public function setDegats($degats){
        if (!is_int($degats)){
            trigger_error('ce doit etre un chiffre');
            return;
        }
        $this->_degats = $degats;
    }
    public function afficherstat()
    {
        print("nom : ".$this->_nom);
        print( $this->_degats);
    }
     public function definirForce($force)
    {
        $this->_force = $force;
    }
    public function definirDegat($degat)
    {
        $this->_degats = $degat;
    }
    public function definirXp($xp)
    {
        $this->_experience = $xp;
    }
    public function parler()
    {
        print("Je suis un personnage<br>");
    }
    public function gagnerXp()
    {
        $this->_experience++;
        return $this->_experience;
    }
    public function afficherXp(){
        print("Experience : ".$this->_experience);
    }
    public function __toString(){
        return $this->getnom();
    }
    public function frapper(Personnage $Victime)
    {
        $Victime->_degats = $Victime->_degats + $this->_force;
        print($this ->getnom(). " à bruler vivant -> ".$Victime->getnom()." = ".$Victime->getDegats()."<br>");
    }

}
