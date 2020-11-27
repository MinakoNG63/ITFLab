<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'minako.mysql.database.azure.com', 'it63070240@minako', 'Itf63070240', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$height = $_GET["height"];
$weight = $_GET["weight"];
$bmi = $weight/(($height*0.01)**2);
$name = $_GET["name"];

$sql = "INSERT INTO finallab (name , height , weight , bmi) VALUES ('$name', '$height', '$weight', '$bmi')";


if (mysqli_query($conn, $sql)) {
    header('location:show2.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>