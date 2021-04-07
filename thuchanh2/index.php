<?php
// require_once "QuestionsList.php";
function my_autoloader($class) {
    require $class.'.php';
}
spl_autoload_register('my_autoloader');

$questions = new QuestionsList();
$file = $questions->parse('questions.md');
$all = $questions->all($file, '######');

if(isset($_GET['search'])){
    $keyword = $_GET['search'];
    var_dump($keyword);
    $all = $questions->fuzzySearch($all, $keyword);
}
// $search = "Which one is true?";
// array_filter($array, function($all) use ($search) {
//     return ( strpos($all, $search) !== false );
// });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($all as $item){?>
        <?php echo $item ?> <br><br>
    <?php }?>
</body>
</html>