<?php
//   //For Loop
//     for ($i=0; $i < 10 ; $i++) {
//       echo "$i <br />";
//     }
//
// echo "<br />";
//
//   // While Loop
//   $i = 0;
//     while ($i < 10) {
//       echo "$i <br />";
//       $i++;
//     }
//
//     echo "<br />";
//
//   //doWhile loop
//   $i = 0;
//   do {
//     echo "$i <br />";
//     $i++;
//   } while ($i < 10);

//ForEach loop
  //for indexed arrays
  $listOfNumbers = array(1,2,3,4,5);
  foreach ($listOfNumbers as $eachNumber) {
    echo "$eachNumber <br />";
  }

  //for associative arrays
  $listOfPeoplesAges = array(
    'A' => 1,
    'B' => 2,
    'C' => 3,
    'D' => 4,
    'E' => 5
  );

  foreach ($listOfPeoplesAges as $eachPeoplesAges => $age) {
    echo "$eachPeoplesAges : $age <br />";
  }
 ?>
