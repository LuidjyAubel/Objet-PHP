<?php

class Terraindejeu{
    public function lancercombat(Personnage $perso1, Personnage $perso2){
        $perso1->frapper($perso2);
    }
}