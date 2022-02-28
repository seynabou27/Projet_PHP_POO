<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class ChambreManager extends AbstractManager{
    
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="chambre";
        $this->primaryKey="id_chambre";
    }
   

public function insert(array $model):int{
         $sql="INSERT INTO `chambre` (`num_chambre`, `num_etage`, `id_type_chambre`, `id_pavillon`) VALUES (?, ?, ?, ?);";
        return $this->dataBase->executeUpdate($sql,$model);
    }
public  function update(array $model):int{
        $sql="update  $this->tableName  `chambre` set 
               `num_chambre`=?, `num_etage`=? ,`id_type_chambre`=? ,`id_pavillon` =?, `etat` =?
                 where $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }
}
  

