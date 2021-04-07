<?php 
function sort_arr1($arr){
    $arr_count = count($arr);
    for($i = 0; $i < $arr_count - 1; $i++){
        $min = $i;
        for($j= $i+1; $j < $arr_count; $j++){
            if($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}
$array = [6,7,2,1,9];
$array_new = sort_arr1($array);
var_dump($array_new);