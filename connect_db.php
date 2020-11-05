<?php
error_reporting (1);
$conn=mysqli_connect('localhost','root','')or die("cannot connect to server");
mysqli_select_db($conn, "pharmacy")or die("cannot connect to database");

?>