<?php 
namespace App\Repository;



class EtudiantNBourssierRepository extends EtudiantRepository {
   
    public function __construct(){
        parent::__construct();
        $this->role="ROLE_ETUDIANT";
    }
    /* function  findAll():array{
        $sql="select * from $this->tableName where type like ?  ";
         return $this->dataBase->executeSelect( $sql,[$this->type ]);
    } */
    
    

}