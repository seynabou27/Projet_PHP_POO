<?php
namespace App\Core\Orm;
interface ManagerInterface{
    function insert(array $model):int;

    function update(array $model):int;

    function persit(array $model):int;
    
    function remove(string $sql, int $id):int;

}

?>