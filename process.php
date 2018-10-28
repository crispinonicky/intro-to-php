<html>

<head>
<title>
The Name Page
</title>
</head>

<body>
  
<?php


echo "EGADS! The submit button redirected properly....Neat!";

echo nl2br("\n");
echo nl2br("\n");


  $name = $_POST["name"];
  echo "Hello, " . $name . "!";

?>


</body>


</html>