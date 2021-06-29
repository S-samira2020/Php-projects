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
     // while loop

     /*$a  = 11;
     while($a <= 6)
     {
           echo "The number is : $a <br> ";
           $a++;
     }
 */

// do while loop

/*$a  = 11;
do{
      echo "the number is: $a <br>";
      $a++;
}
while($a <= 10)
*/

// for loop

/*for($a = 1; $a <= 20; $a++)
{
      echo "the number is : $a <br> ";
}


$num = 2;
$mul;
for($a  = 0; $a <= 10; $a++)
{
      $mul = $num * $a;
      echo "$num x $a = $mul <br>"; 
}



for($a  = 2; $a <= 100; $a += 2)
{
      
      echo "even is: $a <br>";
}
*/

// for each
/*$name  = array('Samira', 'Ramisa', 'Sakiba', 'Sagor', 'Abika');
foreach($name as $other_name)
{
      echo " $other_name <br>";
}*/

$mobile = array('Apple', 'Samsung', 'Symphony', 'Realme', 'Oppo');
foreach($mobile as $value)
{ 
      echo " $value <br>";
}

     ?>
</body>
</html>