<?php
    define("hostname","localhost");
    define("user","plug");
    define("password","dkujwcbMo4W5PTVU");
    define("dbname","bookstore");
?>
<?php
    $conn=new mysqli(hostname,user,password,dbname);
    $conn->query("SET NAMES UTF8");
    if($conn->connect_error) echo "not connect";
    else echo "Connect success";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>

<?php 
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<a href='form_insert.php'>เพิ่ม</a>";
    echo "<center>";
    
    echo "<table border='1'><tr><th>ID</th>
    <th>BookName</th>
    <th>TypeID</th>
    <th>StatusID</th>
    <th>Publish</th>
    <th>UnitPrice</th>
    <th>UnitRent</th>
    <th>DayAmount</th>
    <th>Picture</th>
    <th>BookDate</th>
    <th>edit delete</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo  "<tr><td>".$row["BookID"].
            "</td><td>".$row["BookName"].
            "</td><td> ".$row["TypeID"].
            "</td><td> ".$row["StatusID"].
            "</td><td> ".$row["Publish"].
            "</td><td> ".$row["UnitPrice"].
            "</td><td> ".$row["UnitRent"].
            "</td><td> ".$row["DayAmount"].
            "</td><td> ".$row["Picture"].
            "</td><td> ".$row["BookDate"].
            "</td><td><a href=''>edit</a> <a href=''>delete</a></td></tr>";
    }

    echo "</table>";
    echo "</center>";
  } else {
    echo "0 results";
  }
  $conn->close();
?>
</body>
</html>





