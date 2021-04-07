<?php
function array_partial_search( $array, $keyword ) {
  $found = [];
  // Loop through each item and check for a match.
  foreach ( $array as $string ) {
      // If found somewhere inside the string, add.
      if ( strpos( $string, $keyword ) !== false ) {
          $found[] = $string;
      }
  }
  return $found;
}
// Simple list of fruits.
$fruits = [ 'apple banna', 'grapes', 'orange', 'pineapple' ];
// Result - [ 'apple', 'grapes', 'pineapple' ];
$found = array_partial_search( $fruits, 'apple b' );
var_dump($found);

