<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";
$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
 echo "not submitted";
}
$Email = $_POST['email'];
$Password = $_POST['password'];
$sql = "INSERT INTO `login`(`Email`, `Password`) VALUES ('[$Email]','[$Password]')";

$result = mysqli_query($con, $sql);
 if($result)
 {
  echo "login successfully";
  }
  else
  {
  echo "error";
  }

?>