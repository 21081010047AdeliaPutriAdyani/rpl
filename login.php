<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = "SELECT * FROM employees where username=$username and password=$password";
$cek = mysqli_num_rows(connection(), $query);
echo $cek;
?>