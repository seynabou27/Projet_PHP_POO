<?php 
namespace App\Repository;

use App\Core\Orm\AbstractRepository;

class BourseRepository extends AbstractRepository{
   
    public function __construct(){
        $this->tableName='bourse';
        $this->primaryKey='id_bourse';
        parent::__construct();
        $this->role="ROLE_ETUDIANT";
    }


    function  findAll():array{
        $sql="select * from $this->tableName";
         return $this->dataBase->executeSelect($sql);
    }
    public function findEtuBoursier(){
        $sql = "select * from $this->tableName p
                    INNER JOIN bourse b 
                        ON p.id_bourse=b.id_bourse ";
         return $this->dataBase->executeSelect( $sql);
    }
    
    

}