<?php 
namespace App\Repository;
class RPRepository extends PersonneRepository{
    
    public function __construct(){
        parent::__construct();
        $this->role="ROLE_RESPONSABLE";
    }

    function findAll():array{
        $sql="select * from $this->tableName where role=? ";
         return $this->dataBase->executeSelect( $sql,[$this->role ]);
     }
}