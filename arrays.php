<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    //Indexed Arrays//
      $listOfPeople1 = array('Kevin', 'Jeremy', 'Sara');
      //can also is_write
      $$listOfPeople2 = ['Kevin', 'Jeremy', 'Sara'];

      echo "$listOfPeople1[1]<br />";
      echo count($listOfPeople1)."<br />";

      //helpful commands for debugging//
        //Displays all elements of array
        print_r($listOfPeople1);
        echo "<br />";

        //displays all elements of array with their data types
        var_dump($listOfPeople1);
        echo "<br />";

    //Associative Arrays//
      $listOfPeople = array(
        'Brad' => 35,
        'Jose' => 32,
        'William' => 37
      );

      echo $listOfPeople['Brad']."<br />";

    //Multidimensional Array//
      $listOfNumbers = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
      );

      echo $listOfNumbers[2][2];
    ?>
  </body>
</html>
