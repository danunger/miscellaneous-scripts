<?php

$c = 1;
$oldi = 0;
for ($i = 1 ; $i <= 100 ; $i++) {
  
  for ($j = 1 ; $j <= $i ; $j++) {
  
    $c1 = $c-1;
    $d = date('Y-m-d', strtotime("2020-11-7 +$c1 days", time()));
  
    echo "$d (day $c): $i burpee";
    if ($i > 1) echo 's';
    if ($oldi != $i) {
      echo ' *** new ***';
      $oldi = $i;
    }
    echo "\n";
    
    $c++;
  
  }

}