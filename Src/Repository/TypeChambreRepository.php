<?php 
namespace App\Repository;

use App\Core\Orm\AbstractRepository;

class TypeChambreRepository extends AbstractRepository{
   
    public function __construct(){
        $this->tableName='type_chambre';
        $this->primaryKey='id_type_chambre';
        parent::__construct();
        $this->role="ROLE_RESPONSABLE";
    }


    function  findAll():array{
        $sql="select * from $this->tableName";
         return $this->dataBase->executeSelect($sql);
    }
    
    

}