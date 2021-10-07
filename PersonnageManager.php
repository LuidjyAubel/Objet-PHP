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
        $requete = $this->_db->query('SELECT id, nom, `force`, degats, experience, niveau, classe FROM perso;');
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
            switch ((int)$ligne['classe'] ) {
                case Personnage::MAGICIEN:
                    $perso = new Magicien($ligne);
                    break;
                case Personnage::ARCHER:
                    $perso = new archer($ligne);
                    break;
                case Personnage::ZOMBIE:
                    $perso = new zombie($ligne);
                default:
                    break;
            }
            //$perso = new Personnage($ligne);
            $tabperso[] = $perso;
        }
        return $tabperso;
    }
     public function getOne(int $id)
    {
         $sth = $this->_db->prepare('SELECT id, nom, `force`, degats, experience, niveau FROM perso WHERE id = ? ;');
         $sth->bindParam(1,$id);
         $ligne = $sth->fetch();
 
    }
}
