<?php

$people = array('a', 'e', 'g', 'j', 'l', 'o', 't');
$start = array(1,2,3,4,5,6,7);
$end = array_reverse($start);
//echo "Starting out start is " . print_r($start, true) . " and end is " . print_r($end, true) . "\n\n";

$perms = computePermutations($people);
//print_r($perms);

foreach ($perms as $p) {
  //echo "Trying case " . print_r($p, true) . "\n\n";
  $a = $start;
  foreach ($p as $q) {
    $a = swap($a, $q);
  }
  if ($a == $end) echo "Answer is " . print_r($p, true);

}

function swap($a, $q) {
  $tmp = $a;
  //echo "  tmp is " . print_r($tmp, true) . "\n";
  //echo "  q is $q\n";
  switch($q) {
    case 'a':
      $tmp[0] = $a[6];
      $tmp[6] = $a[0];
      break;
    case 'e':
      $tmp[3] = $a[5];
      $tmp[4] = $a[6];
      $tmp[5] = $a[3];
      $tmp[6] = $a[4];
      break;
    case 'g':
      $tmp[2] = $a[6];
      $tmp[3] = $a[2];
      $tmp[4] = $a[3];
      $tmp[5] = $a[4];
      $tmp[6] = $a[5];
      break;
    case 'j':
      $tmp[1] = $a[5];
      $tmp[5] = $a[1];
      break;
    case 'l':
      $tmp[0] = $a[1];
      $tmp[1] = $a[0];
      break;
    case 'o':
      $tmp[1] = $a[4];
      $tmp[4] = $a[1];
      break;
    case 't':
      $tmp[1] = $a[2];
      $tmp[2] = $a[1];
      break;
  }
  return $tmp;
}

// https://stackoverflow.com/questions/10222835/get-all-permutations-of-a-php-array
function computePermutations($array) {
    $result = [];

    $recurse = function($array, $start_i = 0) use (&$result, &$recurse) {
        if ($start_i === count($array)-1) {
            array_push($result, $array);
        }

        for ($i = $start_i; $i < count($array); $i++) {
            //Swap array value at $i and $start_i
            $t = $array[$i]; $array[$i] = $array[$start_i]; $array[$start_i] = $t;

            //Recurse
            $recurse($array, $start_i + 1);

            //Restore old order
            $t = $array[$i]; $array[$i] = $array[$start_i]; $array[$start_i] = $t;
        }
    };

    $recurse($array);

    return $result;
}
?>