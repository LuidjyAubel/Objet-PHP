<?php
//include "Personnage.php";
function chargerClass($class){
 include $class.".php";
}
spl_autoload_register("chargerClass");
print("<h1>Jeu 2 Baston (la bagarre !!!!!!)</h1>");

include 'conf.php';

try{
    $db = new PDO($host, $user, $passw);
    if ($db){
        print('base de donnée');
        $requete = $db->query('SELECT id, nom, `force`, degats, experience, niveau FROM perso;');
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
            $perso = new Personnage($ligne);
            print('info'.$perso->getid(). " ".$perso->getnom()." ".$perso->getniv()." ".$perso->getForce()." ".$perso->getXP()." ".$perso->getDegats());
        }
    }
}catch (PDOException $e){
    print($e->getmessage());
}