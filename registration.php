<?php
session_start();
header('location:login.php')

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

//this code is to select the database//

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
  echo"Sorry! The username you chose is already taken";

}
else {
  $reg = "insert into usertable(name, Password) values('$name', '$pass')";
  mysqli_query($con, $reg);
  echo" Registration Successful!";

}
