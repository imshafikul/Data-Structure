<?php

  /*
  Insertion sort in Descending Order
  */ 


  function insertionsort(array $array): array
  {
    $lenght = count($array);
    for($i=0; $i<$lenght; $i++){
      $j = $i;
      while($j>0 && $array[$j] > $array[$j - 1]){
        $temp = $array[$j];
        $array[$j] = $array[$j -1];
        $array[$j -1] = $temp;
        $j--;
      }
    }

    return $array;

  }
  
  $sorted_array = insertionsort([5,8,1,6]);

  echo implode(",", $sorted_array);

?>