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
       $name  = "Rezoana Ahmed Samira";
       echo strlen($name); // length print
       echo " <br> ";
       echo strrev($name); // reversely  print
       echo " <br> ";
       echo str_word_count($name); // word count
       echo " <br> ";
       echo strpos($name, "S"); // position of S 
       echo " <br> ";
       echo str_replace("psycho", $name, " Hello psycho");
       echo " <br> ";
       echo str_repeat($name , 5);
      ?>
</body>
</html>