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
      $name = "Samira"; 
      $class = "10th";
      $phy = 90;
      $che  = 80;
      $h_math = 94;
      $g_math = 97;
      $eng = 87;
      $sum = $phy + $che +$h_math + $g_math + $eng;
      $per = $sum/500*100;
      echo "<b> Student Name is : $name </b> <br>";# <br> using for new line
      echo "<b> Student Class name is: $class </b> <br>"; # <b> using for bold
      echo "<b> Student total marks are: $sum </b> <br>";
      echo "<b> Student percentage is: $per </b> <br>";
      ?>
</body>
</html>
