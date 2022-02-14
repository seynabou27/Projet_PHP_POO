<?php 
 namespace App\Core\Orm;

  abstract class AbstractRepository extends AbstractObject implements RepositoryInterface{
    
      public function __construct()
      {
          parent::__construct();
      }
    
    function findAll():array{
         $sql="select * from $this->tableName";
          return $this->dataBase->executeSelect( $sql);

      }
      function findById(int $id):array{
        $sql="select * from $this->tableName where $this->primaryKey=?";
         return $this->dataBase->executeSelect($sql,[$id]);
      }
       function findBy(string $sql,array $data,$single=false):array|object|bool{
        return $this->dataBase->executeSelect($sql,$data,$single);
      } 
   
  



}