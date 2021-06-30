<?php
function print_movie_from_nbr(int $nbr)
{
  switch ($nbr )
  { 
 case 3:
 echo "the three brothers" ,"Vn" ;
 break;

 case 6:
 echo "the sixth Sense , \n";
 break ;

 case 23 :
  echo "the numbeer 23" , "\n";
  break;

  case 28 :
  echo " 28 Days Laters \n";
  break;

  default:
  echo "I don't knox \n";
  break; 
  }
} ;
?>
