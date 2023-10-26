<?php
function score($score1, $score2, $score3) 
{
    $total = $score1 + $score2 + $score3;


    if( $total > 210 )
    {
        echo "合計点は" . $total . "点なので合格です" . "<br>";
    }else
    {
        echo "合計点は" . $total . "点なので不合格です" . "<br>";
    }
}
score(65 ,70 ,77);


function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total . "<br>";

function trianglearea($bottom, $height)
{
    return $bottom * $height / 2;
}

function squarearea($bottom, $height)
{
    return $bottom * $height;
}

function trapezoidarea($bottom, $top, $height)
{
    return ($bottom + $top) * $height / 2;
}

echo trianglearea(2, 4) . "<br>";
echo squarearea(5, 4) . "<br>";
echo trapezoidarea(2, 3, 4) . "<br>";

$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
    echo $person;
    echo '<br />';
}

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . 'は' . $name . 'です' . '<br>';
}

$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['Hanako', 16, 'women']
];

foreach ($people as $people) {
    echo $people[0] . '(' . $people[1] . '歳' . $people[2] . ')' . '<br>';
}