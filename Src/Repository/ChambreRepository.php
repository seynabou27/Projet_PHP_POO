<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;
use \stdClass;

class ChambreRepository extends AbstractRepository{
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="chambre";
        $this->primaryKey="id_chambre";
    }
   
     function findAll_chambre():array{
         $sql="select * from $this->tableName ";
          return $this->dataBase->executeSelect($sql);
      }

     
      function findPavillon(string $num):object|bool{
        $sql="select * from $this->tableName where num_chambre=? and num_etage=?";
        return $this->findBy($sql,[$num],true);



      }
      
}