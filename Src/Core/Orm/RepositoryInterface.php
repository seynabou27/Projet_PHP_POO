<?php 
namespace App\Core\Orm;
interface RepositoryInterface{
    function fillAll():array;

    function findById(int $id):array;

    function findBy(string $sql,array $data,$single=false):array|object|bool;
}

?>