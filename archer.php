<?php
class archer extends Personnage{
    private $_stamina;
    public function frapper(Personnage $persofrapper):Personnage
    {
        $persofrapper->_degats = $this->_stamina;
        parent::frapper($persofrapper);
        return $this;
    }
    public function insulter(){
        print("tu vise comme un pied");
}
}