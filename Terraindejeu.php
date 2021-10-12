<?php

class Terraindejeu{
    public static function lancercombat(Personnage $perso1, Personnage $perso2){
        $perso1->frapper($perso2);

        $perso1->insulter();
        $perso2->insulter();
    }
}