<?php
class A {
    public function __toString(){
        echo "Hello";
    }
}
$data = new A();

// NO CHANGES ALLOWED BELOW
for ($i = 0; $i <= count($data); $i++) {
    $data++;
}

echo $data;

/*
 * Magic output:
 *
 * Hello
 */