<?php
//include "Personnage.php";
function chargerClass($class){
 include $class.".php";
}
spl_autoload_register("chargerClass");
print("<h1>Jeu 2 Baston (la bagarre !!!!!!)</h1>");