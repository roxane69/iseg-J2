<?php
function sequence(int $nbr)
{
    if ($snbr <0)
        return;
    for ($i=0; $i<= 100; $i++) {
        if($i% $nbr===0){
            echo $i."\n";
        }
    }
}
sequence(5);
?>