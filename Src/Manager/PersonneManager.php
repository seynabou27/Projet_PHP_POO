<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class PersonneManager extends AbstractManager{
    
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="users";
        $this->primaryKey="id_user";
    }
   

    public function insert(array $model):int{
         $sql="INSERT INTO `personne`( `nom`, `prenom`, `email`, `role`, `matricule`, `date_naissance`, `id_bourse`, `adresse`, `password`, `type`, `id_chambre`, `tuteur`,`telephone`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set nom_complet=?,login=?,password=?,role=?,tuteur=?,matricule=?,grade=? where $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }
}