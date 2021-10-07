<?php
//include "Personnage.php";
include 'header.php';
print("<h1>Jeu 2 Baston (la bagarre !!!!!!)</h1>");

include 'conf.php';

try {
    $db = new PDO($host, $user, $passw);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $PersonnageManager = new PersonnageManager($db);
    $personnage = $PersonnageManager->getList();
    print("liste des personnages : ");
    foreach ($personnage as $personnages) {
        print('<br>' . $personnages->getNom()." (".$personnages->getforce().") ");
        if ($personnages->getClasse() == 1){
            print("MAGICIEN");
        }else if ($personnages->getClasse() == 2){
            print("ARCHER");
        }else if($personnages->getClasse() == 3){
            print("ZOMBIE");
        };
    }
    //$personnage = $PersonnageManager->getOne(2);
    /* $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
if ($db){
print('base de donnée');
$requete = $db->query('SELECT id, nom, `force`, degats, experience, niveau FROM perso;');
while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
$perso = new Personnage($ligne);
print('info '.$perso->getid(). " ".$perso->getnom()." ".$perso->getNiveau()." ".$perso->getForce()." ".$perso->getExperience()." ".$perso->getDegats());
}
}*/
} catch (PDOException $e) {
    print($e->getmessage());
}
