<?php 
// $txt_file = file_get_contents('questions.md');
// $rows        = explode("#### Answer:", $txt_file);
// array_shift($rows);
// print_r($rows);
$titles = <<<EOF
Apple
Apples
Orange
Oranges
Banana
EOF;


$titles = explode("Banana", $titles );
$matches = array();
foreach( $titles as $title ) {
    $matches[$title] = array();
    foreach( $titles as $compare_to ) {
        $matches[$title][$compare_to] = levenshtein( $compare_to, $title );
    }
    asort( $matches[$title], SORT_NUMERIC  );
}
var_dump($titles);
