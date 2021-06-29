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
      /*$x = 5;
      $y = $x++;
      echo "$y  <br> $x ";
      $y = ++$x;
      echo "$y <br> $x";
      $y = --$x;
      $y = $x--;
      echo "$y <br> $x";
      echo "$y <br> $x";
      */
      $x = 10;
      $y = 8;
      $z = 6;
      if($x > $y && $x > $z) 
      {
            echo "This is true <br> ";
      }
      if($x > $y && $y > $z) 
      {
            echo "This is true, too <br> ";
      }
      if($x > $y || $y < $z) 
      {
            echo "This is true also <br> ";
      }
      ?>
</body>
</html>