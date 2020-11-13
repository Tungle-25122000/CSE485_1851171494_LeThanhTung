<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
} 

/*<?php
    //B1: ket noi database Server
    $conn = mysqli_connect('localhost','root','','demo');
    if(!$conn){
        die('Không thể kết nối. Kiểm tra lại các tham số');
    }*/