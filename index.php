<html>

<body>

<head>

<title>Hello World</title>

  </head>
<h1>Can you read me?</h1>

<p>Since it seems to be such a desirable skill, I'm going to do my best to learn php!</p>

<form>
<input type="text">
<input type="submit">
</form>

<hr>

<?php

echo "Everything below this line is in a PHP tag!";

echo nl2br("\n");
echo nl2br("\n");

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




</body>

</html>