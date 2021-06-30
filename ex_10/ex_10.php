<?php
function my_get_args (...$params)
{
 $array= [];
 foreach($params as $params){
     array_push($array,$params);
 }
 return $params;
}
var_dump(my_get_args("hello", "world", 1, 2,"test"));
?>