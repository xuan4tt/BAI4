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
    
}

?>

