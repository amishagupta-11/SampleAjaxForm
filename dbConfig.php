<?php
// creating database

//connecting to the database
// $servername="localhost";
// $username="root";
// $password="";
//creating a connection obj
// $conn=mysqli_connect($servername,$username,$password);
// if(!$conn){
//     die("Sorry we failed to connect: ".mysqli_connect_error());
// }
// echo "connection was successful!";

// // creating a db 
// $sql="CREATE DATABASE LoginData";
// $result=mysqli_query($conn,$sql);
// // to check if db is created or not 
// echo "database created:";
// echo var_dump($result)."<br>";
// if($result){
//     echo "the db was created successfully!";
// }
// echo "the db was not created successfully ".mysqli_connect_error();

//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="LoginData";
//creating a connection obj
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
// echo "connection was successful!";

//create a table

// $sql = "CREATE TABLE `Users` (
//     `Id` INT(6) NOT NULL AUTO_INCREMENT,
//     `First Name` VARCHAR(255) NOT NULL,
//     `Last Name` VARCHAR(255) ,
//     `username` VARCHAR(100),
//     `Email` VARCHAR(255) NOT NULL,
//     `Password` VARCHAR(50) NOT NULL,
//     `Confirm_Password` VARCHAR(50) NOT NULL,
//     `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     `token` VARCHAR(100),
//     `tokenExpiration`  TIMESTAMP DEFAULT '2000-01-01 00:00:00',  

//     PRIMARY KEY (`Id`)
// )";

// //check for table creation.
// $result=mysqli_query($con,$sql);

// if($result){
//     echo "Table  created successfully!";
// }
// echo "Table creation was unsuccessful. ".mysqli_connect_error();

