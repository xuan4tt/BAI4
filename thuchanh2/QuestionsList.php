<?php
class QuestionsList {

    public function parse($path){
        $content = file_get_contents($path);
        return $content;
    }

    public function all($content_parse, $explode){
        $questions_array = explode($explode, $content_parse);
        array_shift($questions_array);
        return $questions_array;
    }

    public function fuzzySearch($array_questions, $keyword){
        $result_array = [];
            foreach($array_questions as $value){
                // var_dump(stristr($value, $keyword));die;
                if(stristr($value," " . $keyword . " ")){
                    array_push($result_array, $value);
                }
            }
        return $result_array;
    }
}

?>

