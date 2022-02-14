<?php 

namespace App\Core\Orm;

abstract class AbstractManager extends AbstractObject implements ManagerInterface{
    public function remove(string $sql, int $id): int{
        $sql = "delete from $this->tableName where $this->primaryKey = ?";
        return $this->dataBase->executeUpdate($sql, [$id]);
        
    }
    public function persit(array $model): int{
        if (isset($model[$this->primarykey])) {
            return $this->update($model);
            
        }
        return $this->insert($model);
        
    }

    
}
   
?>



