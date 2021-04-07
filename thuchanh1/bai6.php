
<?php

$data = new class{
    public function __toString(){
        echo "ddđ";
    }

};

// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';

/*
 * Magic output:
 *
 * Hello PHP World
 */