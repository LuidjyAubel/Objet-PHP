<?php
include 'header.php';
$id = $_GET["id"];
try {
    $db = new PDO($host, $user, $passw);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $PersonnageManager = new PersonnageManager($db);
    $personnage = $PersonnageManager->getOne($id);
    
} catch (PDOException $e) {
    print($e->getmessage());
}