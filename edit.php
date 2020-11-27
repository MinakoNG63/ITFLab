<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'minako.mysql.database.azure.com', 'it63070240@minako', 'Itf63070240', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID = $_GET['Id'];
$row = mysqli_query($conn ,"Select * From finallab where Id = $Id");
$result = mysqli_fetch_assoc($row);

if(isset($_GET['submit'])){
 $Id = $_GET['Id'];
 $weight=$_GET['weight'];
 $height=$_GET['height'];

 $sql = "UPDATE finallab SET weight='$weight', height='$height' WHERE Id='$Id'";

 if(mysqli_query($conn, $sql)){
  header("location:show2.php");
 }
}

?>
<!DOCTYPE html>
<html>
<head>
 <title>Comment Form</title>
</head>
<body>
  <form action = "" method = "post" id="CommentForm" >

    weight:<br>
    <input type="float" name = "weight" id="idweight" value="<?=$result['weight']; ?>"> <br>
    height:<br>
    <input type="float" name = "height" id="idheight" value="<?=$result['height']; ?>"> <br><br>

    <input type="submit" name="submit" id="commentBtn">
  </form>
</body>
</html>
