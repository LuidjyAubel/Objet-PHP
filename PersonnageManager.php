<?php
class PersonnageManager{
    private $_db;
    public function __construct($db){
        $this->setdb($db);
    }
    public function setdb($_db):PDO{
        $this->_db = $_db;
    }
    public function adddb(Personnage $perso):bool{

    }
    public function readdb(){

    }
    public function deletedb(Personnage $person){

    }
    public function updatedb(){

    }
}