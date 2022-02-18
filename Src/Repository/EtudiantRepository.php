<?php 
namespace App\Repository;



class EtudiantRepository extends PersonneRepository {
   
    public function __construct(){
        parent::__construct();
        $this->role="ROLE_ETUDIANT";
    }
    function  findAll():array{
        $sql="select * from $this->tableName where role like ?  ";
         return $this->dataBase->executeSelect( $sql,[$this->role ]);
    }
    function insert():array{

        //requette d'insertion a ecrire ....
        $sql="select * from $this->tableName where role like ?  ";
        return $this->dataBase->executeSelect($sql,[$this->role ]);
    }
    // ecrire la requette
    public function findEtudiantByInscription(string $login,string $password):object|bool{
        $sql="select * from $this->tableName where email=? and password=?";
           return $this->findBy($sql,[$login,$password],true);

      }
    

}