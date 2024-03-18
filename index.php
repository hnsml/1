<?php
$name = "Artem";
$age = 19;

echo "Hello! My name is '$name'";
echo "<br>";
echo "I’m $age";


$a = 5;
$b = 3;
echo "<br>";
echo "'$a'+'$b'='".($a + $b)."'";


echo "<br>";
echo "Before swap: a = $a, b = $b";
list($a, $b) = array($b, $a);
echo "<br>";
echo "After swap: a = $a, b = $b";


echo "<br>";
$question_1 = "Яка столиця України?";
$answers_1 = array(
    "a" => "Берлін",
    "b" => "Мадрид",
    "c" => "Рим",
    "d" => "Київ"
);
$correct_answer_1 = "d";

echo "<p>$question_1</p>";
echo "<form>";
foreach ($answers_1 as $key => $answer) {
    echo "<input type='radio' name='question1' value='$key'> $answer<br>";
}
echo "</form>";

echo "<br>";
$question_2 = "Які кольори є в райдуги?";
$answers_2 = array(
    "a" => "Червоний",
    "b" => "Зелений",
    "c" => "Синій",
    "d" => "Жовтий"
);
$correct_answers_2 = array("a", "b", "c");

echo "<p>$question_2</p>";
echo "<form>";
foreach ($answers_2 as $key => $answer) {
    echo "<input type='checkbox' name='question2[]' value='$key'> $answer<br>";
}
echo "</form>";

echo "<br>";
$question_3 = "Назвіть основні принципи ООП?";
$answer_3 = ""; 

echo "<p>$question_3</p>";
echo "<textarea name='question3' rows='4' cols='50'></textarea>";


$tag = "div";
$background_color = "blue";
$color = "white";
$width = "200px";
$height = "100px";

echo "<br>";
echo "<$tag style='background-color: $background_color; color: $color; width: $width; height: $height;'>This is a $tag element with custom styles</$tag>";
?>