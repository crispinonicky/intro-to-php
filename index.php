<html>

<body>

<head>

<title>Hello World</title>

  </head>
<h1>Let's learn all about PHP!</h1>

<p>Since it seems to be such a desirable skill, I'm going to do my best to learn php!</p>

<form action="process.php" method="post">
Enter your name: <input name = "name" type="text">
<input type="submit">
</form>

<hr>



<?php

echo "Everything below this line is in a PHP tag!";

echo nl2br("\n");
echo nl2br("\n");
// I'm using this as a manual double linebreak. Wonder if there's a less messy
// way of doing this....

  $number1 = 1;
  $number2 = 2;
  $number3 = "three";

$sum = $number1 + $number2;  

$sum2 = $number1 + $number3;
// This will output 1. PHP can't add a string to a number.


  $myvar = "****This is my string variable****";

  echo "Hello again! I'm trying to learn how to echo. Outputs are kewl.";

  echo nl2br("\n");
  echo nl2br("\n");

  echo $myvar;
  //output is put in the html and then sent to the user

  echo nl2br("\n");
  echo nl2br("\n");

  echo "This is my sum variable: " . $sum;

  echo nl2br("\n");
  echo nl2br("\n");

  // $false = ($number1 == $number2);

  // echo "This should output false: " . $false;


  $conditional = false;

  if ($conditional == true) {
    echo "This is a conditional, and it is returning TRUE because the variable is true.";
  }  else {
    echo "This is a conditional, and it is returning FALSE because the variable is false.";
  }
  // Works the same as regular JS, huzzah!





?>
<hr>

<?php



echo "This is the people array: ";


//This is going to test how arrays work in PHP


$people = array("Alice", "Bob", "Christie");

print_r($people);
  
echo nl2br("\n");
echo nl2br("\n");

echo "This is the third person in the people array: " . $people[2];



// Let's figure out how loops work:

echo nl2br("\n");
echo nl2br("\n");

echo "This should output each person in the array separated by a single space: ";

foreach ($people as $person) {
  echo $person . ' ';
}



?>

<hr>

<?php

$numbers = array(5, 3, 7);
$sum = 0;



echo "This should output the sum of the array of numbers: ";

echo nl2br("\n");
echo nl2br("\n");

foreach ($numbers as $number){
  $sum = $sum + $number;
}
echo $sum;


?>




</body>

</html>