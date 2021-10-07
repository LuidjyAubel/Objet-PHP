<?php
class Zombie extends Personnage {
    private $_faim;
    public function frapper(Personnage $persofrapper):Personnage
    {
        $persofrapper->_degats = $this->_faim;
        parent::frapper($persofrapper);
        return $this;
    }
}
