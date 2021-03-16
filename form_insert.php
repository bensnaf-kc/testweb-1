<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label>BookID:</label><br>
        <input type="text" id="BookID" name="BookID" value=""><br>
        <label>BookName:</label><br>
        <input type="text" id="BookName" name="BookName" value=""><br>
        <label>TypeID:</label><br>
        <input type="text" id="TypeID" name="TypeID" value=""><br>
        <label>StatusID:</label><br>
        <input type="text" id="StatusID" name="StatusID" value=""><br>
        <label>Publish:</label><br>
        <input type="text" id="Publish" name="Publish" value=""><br>
        <label>UnitPrice:</label><br>
        <input type="text" id="UnitPrice" name="UnitPrice" value=""><br>
        <label>UnitRent:</label><br>
        <input type="text" id="UnitRent" name="UnitRent" value=""><br>
        <label>DayAmount:</label><br>
        <input type="text" id="DayAmount" name="DayAmount" value=""><br>
        <label>Picture:</label><br>
        <input type="text" id="Picture" name="Picture" value=""><br>
        <label>BookDate:</label><br>
        <input type="text" id="BookDate" name="BookDate" value=""><br>
        
        <button type="Submit" id="fname" name="fname" value="">Submit<br>

    </form>
</body>
</html>

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