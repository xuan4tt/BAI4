<?php
//THam chiếu

// $so2 = [&$a,&$a,5];

// $so2[0] = 4;
// $so2[1] = 9;
// $so2[2] = 10;

// var_dump($so2);

$array = [&$a, &$a, &$a];

// NO CHANGES ALLOWED BELOW
var_dump(count($array), array_sum($array));

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;

var_dump(count($array), array_sum($array));

/* OUTPUT :
int(3)
int(0)
int(3)
int(9)
*/
