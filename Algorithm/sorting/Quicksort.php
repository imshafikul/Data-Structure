<?php
  function partition(array &$arr, int $low, int $high)
  {
    $pivot = $arr[($low+$high)/2];

    while($low <= $high){
      while($arr[$low] < $pivot){
        $low++;
      }

      while($arr[$high] > $pivot){
        $high--;
      }

      if($low <= $high){
        $temp = $arr[$low];
        $arr[$low] = $arr[$high];
        $arr[$high] = $temp;
        $low++;
        $high--;
      }

    }

    echo implode(",",$arr)." @pivot $pivot <br>";
    return $low;

  }

  function quicksort(&$arr,$low,$high)
  {
    $partitionIndex = partition($arr,$low,$high);

    if($low < $partitionIndex - 1){
      quicksort($arr, $low, $partitionIndex -1);
    }

    if($high > $partitionIndex){
      quicksort($arr, $partitionIndex, $high);
    }

  }


  $arr = [20, 45, 93, 67, 88,  10,52, 97, 33, 92];

  quicksort($arr,0,count($arr) -1);


?>