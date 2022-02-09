<?php
namespace App\Core\Orm;
interface ManagerInterface{
    function insert(array $model):int;
    function update(array $model, int $id):int;
    function persit(object $model, int $id):int;
    function remove(array $data, int $id=null):int;

}

?>