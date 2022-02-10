<?php 


$url=explode('/',$_SERVER['REQUEST_URI']);
unset($url[0]);

var_dump(array_values($url));

?>