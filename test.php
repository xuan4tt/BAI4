<?php
// $string = "Sometimes I'm happy, Sometimes I'm blue, Sometimes I'm sad";
// $arr = [
//     "Sometimes I'm happy, Sometimes I'm blue, Sometimes I'm sad",
//     "techdjj dkkdsdksk jdsjjdsj ssdjkksd",
//     "fdfstdy, uwefy, kskks, hhdhdhd"
// ];
// $array_new = [];
// $search = "I'm";
// foreach($arr as $value){
//     if(strpos($value, $search)){
//         array_push($array_new, $value);
//     }
// }
// var_dump($array_new);

// $x = strpos($string, 'blue');
// if($x){
//     echo $string;    
// }

// $example = array('An example','Another example','One Example','Last example eww');
// $searchword = 'example ew';
// $matches = array();
// foreach($example as $k=>$v) {
//     if(preg_match("/\b$searchword\b/i", $v)) {
//         $matches[$k] = $v;
//     }
// }
// var_dump($matches);
$input = 'carrrot';

$words  = array('apple','pineapple','banana','orange',
                'radish','carrot ssdsds dsdsd asasaaaa fsds','pea','bean','potato');

$shortest = -1;

foreach ($words as $word) {

    $lev = levenshtein($input, $word);

    if ($lev == 0) {

        $closest = $word;
        $shortest = 0;

        break;
    }

    if ($lev <= $shortest || $shortest < 0) {
        $closest  = $word;
        $shortest = $lev;
    }
}

echo "Input word: $input\n";
if ($shortest == 0) {
    echo "Exact match found: $closest\n";
} else {
    echo "Did you mean: $closest?\n";
}