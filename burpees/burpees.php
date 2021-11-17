<?php

$c = 0;
$oldi = 0;
$overall = 0;
$total100 = 338350;
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
    $overall += $i;
    $pctoverall = ($overall * 100) / $total100;
    echo " (overall $overall " . number_format($pctoverall, 3) . "%)\n";
    
    $c++;
//    if ($overall >= 1000000) break 2;
  
  }

}