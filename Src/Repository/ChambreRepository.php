<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;
use \stdClass;

class ChambreRepository extends AbstractRepository{
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->primaryKey="id_chambre";
        $this->tableName="chambre";
        
    }

    function findAll():array{
      $sql="select * from $this->tableName c , type_chambre t , pavillon p
      where 
      c.id_type_chambre= t.id_type_chambre 
      and
      c.id_pavillon=p.id_pavillon
       ";
       return $this->dataBase->executeSelect($sql);
 }
   
     /* function findAll():array{
         $sql="select * from $this->tableName ";
          return $this->dataBase->executeSelect($sql);
      } */
      function findById(int $id): array{

        $sql="select * from $this->tableName c , type_chambre t  , pavillon p
        where 
        c.id_type_chambre = t.id_type_chambre
        and
        c.id_pavillon = p.id_pavillon
        and
        $this->primaryKey=? ";       
        return $this->dataBase->executeSelect($sql,[$id]);
          
      }


     
      function findChambre(string $num):object|bool{
        $sql="select * from $this->tableName where num_chambre=? and num_etage=?";
        return $this->findBy($sql,[$num],true);



      }

      function findByPavillon2($nom_pav):array{
        $sql="select * from $this->tableName c , pavillon p  
        where 
        c.id_pavillon=p.id_pavillon
        and
        nom_pavillon like ?";
        return $this->dataBase->executeSelect($sql,[$nom_pav]);
    }
      
}