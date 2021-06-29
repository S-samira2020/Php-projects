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
      /*
       echo "The date is : " . date("d/m/y");
       echo "<br>";
       echo (sqrt(4));
       echo "<br>"; 
       echo (min(45,100, 48, 28, 20, 110));
       echo "<br>";
       echo (max(45,100, 48, 28, 20, 110));
       

       echo "Welcome to php <br>";
       function printline()
       {
             for($a = 1; $a <= 100; $a++)
             {
                   echo " - ";
             }
       }
       printline();
       echo "<br> you are learning about php <br>";
       printline();
       echo "<br> Functions in php <br>";
       printline();
       */
      
       function calcper($total)
       {
              $per  = $total / 500 * 100;
              return ($per);
       }
       echo " total mark is: <br>";
       echo calcper(400);

      ?>
</body>
</html>