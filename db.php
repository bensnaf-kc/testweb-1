<?php
    define("hostname","localhost");
    define("user","");
    define("password","");
    define("dbname","bookstore");
?>
<?php
    $mysql = new mysqli(hostname, user,password,dbname);
    if($mysqli -> connect_error){
        echo "Fail".$mysqli -> connect_error;
        exit();
    }



?>