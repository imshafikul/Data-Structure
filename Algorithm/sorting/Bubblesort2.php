<?php
  function bubblesort(array $array): array
  {
    $count = 0;
    $lenght = count($array);
    $bound = $lenght -1;

    for($i=0; $i<$lenght; $i++){

      $swapped = FALSE;
      $new_bound = 0;

      for($j=0; $j<$bound; $j++){
        $count++;
        if($array[$j] > $array[$j + 1]){
          $temp = $array[$j + 1];
          $array[$j + 1] = $array[$j];
          $array[$j] = $temp;

          $swapped = TRUE;
          $new_bound = $j;

        }
      }

      $bound = $new_bound;

      if(!$swapped){
        break;
      }

    }

    echo "Total Comparison: ".$count."\n";
    return $array;


  }

  $array = [9,6,4,2,1];

  $sorted_array = bubblesort($array);

  echo implode(',',$sorted_array);


?>