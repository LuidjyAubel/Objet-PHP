<?php
//include "Personnage.php";
function chargerClass($class){
 include $class.".php";
}
spl_autoload_register("chargerClass");
print("<h1>Jeu 2 Baston (la bagarre !!!!!!)</h1>");
$perso1 = new Personnage("bob");
Personnage::parler();
$perso2 = new Personnage("candice");
//$perso3 = new Personnage();
Personnage::parler();
$perso1->definirForce(100);
$perso1->definirDegat(10);
$perso1->definirXp(5);

$perso2->definirForce(10);
$perso2->definirDegat(8);
$perso2->definirXp(2);
//$perso1->__construct("Bob");
//print("perso2 stat :".$perso2->afficherstat());
//$perso1->parler();
//$perso1->afficherXp();
$perso1->frapper($perso2);
$perso2->frapper($perso1);
//print("perso2 stat :".$perso2->afficherstat());
//$perso1->afficherstat();
