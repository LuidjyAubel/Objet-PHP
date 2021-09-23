<?php
class PersonnageManager{
    private $_db;
    public function __construct($db){
        $this->setdb($db);
    }
    public function setdb($_db)/*:PDO*/{
        $this->_db = $_db;
    }
    public function adddb(Personnage $perso):bool
    {

    }
    public function readdb()
    {

    }
    public function deletedb(Personnage $person)
    {

    }
    public function updatedb(Personnage $perso):bool
    {

    }
     public function getList():array
    {
        $tabperso = array();
        $requete = $this->_db->query('SELECT id, nom, `force`, degats, experience, niveau FROM perso;');
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
            $perso = new Personnage($ligne);
            $tabperso[] = $perso;
        }
        return $tabperso;
    }
}