<?php 
namespace App\Repository;



class EtudiantBourssierRepository extends EtudiantRepository {
   
    public function __construct(){
        parent::__construct();
        $this->tableName='personne';
        $this->primaryKey='id_bourse';
        $this->role="ROLE_ETUDIANT";
    }
    function  findAll():array{
        $sql="select * from $this->tableName where type like ?  ";
         return $this->dataBase->executeSelect( $sql,[$this->type ]);
    }
    public function findEtuBoursier()
    {
        $sql = "select * from $this->tableName p
                    INNER JOIN bourse b 
                        ON p.id_bourse=b.id_bourse ";
         return $this->dataBase->executeSelect( $sql);
    }
    
    

}