<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php
      // array index

      /*$name = array("Haseena", "karishma", "Santosh", "Pushpa ji", "Cheeta");
      echo count($name);
      

      $name  = array("Haseena", "karishma", "Santosh", "Pushpa ji", "Cheeta");
      $arraylength = count($name);
      for($i = 0; $i  < $arraylength; $i++)
      {
            echo "Index number [$i] " , $name[$i];
            echo "<br>";
      }
      

      // assosative array
      $marks  = array("phy" >= "40", "che" >= "60", "math" >= "98");
      echo "Rahul has got  " . $marks['Salma'] . "marks";
      */

      $mobile  = array(array("Samsung",23000,3),array("Iphone",90000,5),array("Oppo",27000,4),array("Realme",35000,6));
      for($i = 0; $i < 4; $i++)
      {
            for($j = 0; $j < 3; $j++)
            {
                  echo $mobile[$i][$j];
                  echo "|";
            }
            echo "<br>";
      }

      ?>
</body>
</html>