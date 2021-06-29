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
      /*$name  = " Samira";
      $txt = "Hi";
      echo $txt.$name ;
      echo " <br> ";
      */

      $name  = " Samira";
      $txt  = "Hello";
      $txt .= $name;
      echo " $txt <br> ";
      
      $x  = 5;
      $y = 4;
      //echo $z  = ($x > $y)? "this is true" : "this is not true";
      echo $z  = ($x < $y)? "this is true" : "this is not true";
      ?>
</body>
</html>