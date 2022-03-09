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
    
    

}