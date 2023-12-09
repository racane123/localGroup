<?php


$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lgu';


$conn = new mysqli($host,$username,$password,$dbname);


if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}


echo"Connected Successfully";
