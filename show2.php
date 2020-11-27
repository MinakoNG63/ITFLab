<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<title>ITF Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hello</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class='container'>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'minako.mysql.database.azure.com', 'it63070240@minako', 'Itf63070240', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM finallab');
?>
<table width="600" border="1">
  <tr>
    <th> <div align="center">name</div></th>
    <th> <div align="center">weight</div></th>
    <th> <div align="center">height</div></th>
    <th> <div align="center">bmi</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['bmi'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="form2.html" class="btn btn-primary">เพิ่ม</a>

</div>
</body>
</html>
