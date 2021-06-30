<?php
function my_print_args(...$params)
{
    foreach($params as $params) {
        echo $params. "\n";
    }
    }
    my_print_args("hello","world",1,2,"test");
    ?>