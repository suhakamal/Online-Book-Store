<?php
$servername = "localhost";
$username = "storeadmin";
$password = "storeadmin";
$dbname = "bookstore";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
