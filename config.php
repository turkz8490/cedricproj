<?php
$host = 'localhost'; #host
$mydatabase = 'philhealth'; #database
$username = 'root'; #username
$password = ''; #password

try{
// http://php.net/manual/en/pdo.connections.php
    $conn = new PDO("mysql:host={$host};dbname={$mydatabase}", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
    // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
    //echo "PDO connection Success";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>