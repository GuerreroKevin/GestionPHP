<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bienvenido a mi crud
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT column1, column2, column3, column4, column5 FROM table1";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Fecha</th><th>NumeroInt</th><th>NumeroDouble</th><th>Eliminar</th><th>Modificar</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["column1"]."</td><td>".$row["column2"]."</td><td>".$row["column3"]."</td><td>".$row["column4"]."</td><td>".$row["column5"]."</td><td><img src='delete.png'></td><td><img src='update.png'></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 
<fieldset>
  <legend>Inserte la informacion del nuevo registro</legend>
  column1 <input type="number" name="" id="">
  column2 <input type="text" name="" id="">
  colum3 <input type="time" name="" id="">
</fieldset>
</body>
</html>