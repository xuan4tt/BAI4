<?php
function kiemtra($arr, $search_key){
    foreach($arr as $key => $value){
        if($value == $search_key){
            return true;
        }
    }
    return false;
}
