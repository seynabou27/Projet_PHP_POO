<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class PavillonManager extends AbstractManager{
    
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="pavillon";
        $this->primaryKey="id_pavillon";
    }
   

    public function insert(array $model):int{
         $sql="INSERT INTO `pavillon` (`nom_pavillon`, `num_pavillon`, `nbr_etage`) VALUES (?, ?, ?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="UPDATE $this->tableName SET 
         `nom_pavillon` = ?, 
         `num_pavillon` = ?, 
         `nbr_etage` = ? 
         WHERE  
         $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }
}