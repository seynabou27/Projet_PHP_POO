<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;
use \stdClass;

class PavillonRepository extends AbstractRepository{
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="pavillon";
        $this->primaryKey="id_pavillon";
    }
   
     function findAll():array{
         $sql="select * from $this->tableName ";
          return $this->dataBase->executeSelect($sql);
      }

      function findById(int $id_pav): array{

        $sql="select * from $this->tableName p
        where 
        p.id_pavillon = p.id_pavillon
        and
        $this->primaryKey=? ";       
        return $this->dataBase->executeSelect($sql,[$id_pav]);
      }

      
      function findAll_pavillon1():array{
        $sql="select * from $this->tableName ";
         return $this->dataBase->executeSelect($sql);
     }

     
      function findPavillon(string $nom):object|bool{
        $sql="select * from $this->tableName where nom_pavillon=? and num_pavillon=?";
        return $this->findBy($sql,[$nom],true);



      }
      
}