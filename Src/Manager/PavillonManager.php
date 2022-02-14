<?php 
    namespace App\Core\Manager;

    abstract class AbstractRepository extends AbstractObject implements RepositoryInterface{
        public function findAll():array{
            $sql="select * from $this->tableName";
            return $this->database->executeselect($sql);
        }
        public function findById(int $id):array{
            $sql="select * from $this->tableName where $this->primaryKey=$id";
            return $this->database->executeselect($sql);
        }

    }

?>