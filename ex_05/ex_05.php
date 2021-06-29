<?php
function my_swap(mixed &$a, mixed &$b){
$c = $a;
$a = $b;
$b = $c;
}
?>