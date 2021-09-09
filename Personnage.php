<?php

class Personnage
{
// les attributs et méthode ici
    private $_nom = "Inconnu";
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;

//méthode
    public function __construct($nom){
        $this->_nom = $nom;
        print("Le personnage : ".$nom);
    }
    public function afficherstat()
    {
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
    public function frapper($Victime)
    {
        $Victime->_degats = $Victime->_degats + $this->_force;
    }

}
