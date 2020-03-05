<?php
/* Name:Fahim Zubaer
 Course: CNT 4714 – Fall 2017 
 Assignment title: A Three-Tier Distributed Web-Based Application Using PHP and Apache
 Due Date: December 3, 2017
*/


include('connection.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

echo $username."\n<br />";
echo $password."<br />";

$URL = 'localhost';
$DATABASE = 'project5';

$_SESSION['username'] = $username;
$_SESSION['url'] = $URL;
$_SESSION['password'] = $password;
$_SESSION['database'] = $DATABASE;

header('Location: query.php');
?>