<?php

$month = 'an';
if ($month == 'Jan' ){
    echo "it is jan ";
}else{
    echo 'Month entered is not correct ';
}

 

$day_of_the_week = 'Monday';

switch ($day_of_the_week){
    case 'Monday':
        echo "It is Monday";
        break;
    case 'Tuesday':
        echo "It is Tuesday";
        break;
    default:
        echo " Invalid Input";
}

$answer = "2";
$answers = array(
    '12'    => "Correct Answer",
    '782'   => "Correct Answer",
    '902'   => "Correct Answer",
    '52'    => "Correct Answer",
    '1092'  => "Correct Answer",
);

echo isset ($answers[$answer]) ? $answers[$answer] : 'Incorrect Answer';

?>

