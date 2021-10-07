<?php
class Magicien extends Personnage{
    private $magie;

    public function frapper(Personnage $persofrapper):Personnage{
        $persofrapper->_degats = $this->magie;
        parent::frapper($persofrapper);
        return $this;

    }

}
