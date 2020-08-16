<?php

$myNum = 10;

function addFive($num){
  $num += 5;
}

function addTen(&$num){
  $num += 10;
}

addFive($myNum);
echo "$myNum<br/>";

addTen($myNum);
echo "$myNum<br/>";


 ?>
