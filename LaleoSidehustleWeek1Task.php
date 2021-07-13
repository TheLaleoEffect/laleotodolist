<?php 

echo "Question One". "<br>";

$integers= range(0, 25);

// Choosing $integers as name label and choosing 0 and 25 as start and end arguments

var_dump($integers);

?>


<?php 

echo "Question Two" . "<br>";

// Choosing label as name representing numbers, add for summation and choosing 5 and 30 as start and end values with an increment of 5.

$label1=5;
$label2=10;
$label3=15;
$label4=20;
$label5=25;
$label6=30; 


echo "<br>";

$labels= array(5,10,15,20,25,30);
function add($label1, $label2, $label3, $label4, $label5, $label6){
return $label1 + $label2 + $label3 + $label4 + $label5 + $label6 . "<br>";
}

$addresult = add(5,10,15,20,25,30);

echo $addresult; 

// End Result: add of 5, 10, 15, 20, 25, 30 gives 105.

?>

