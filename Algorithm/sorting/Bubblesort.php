<?php

  /*
  # Plain bubble sort without improvement.
  */

  function bubblesort(array $array): array
  {
    $count = 0;
    $length = count($array);

    for($i=0; $i<$length; $i++){
      for($j=0; $j<$length - 1; $j++){
        $count++;

        if($array[$j] > $array[$j+1] ){
          $temp = $array[$j + 1];
          $array[$j + 1] = $array[$j];
          $array[$j] = $temp; 
        }


      }
    }

    echo "Total comparison: ".$count. "\n";
    return $array;


  }


  $array = [9,6,4,2,1];

  $sorted_array = bubblesort($array);

  echo implode(',',$sorted_array);





?>