<?php
phpinfo();
#$connect = mysqli_connect("localhost", "root", "password", "test");
#var_dump($connect);

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($connect, "INSERT INTO test_table(id, name) VALUES (1, 'Ivan')");
$result = mysqli_query($connect, "SELECT * FROM test_table");
$result = mysqli_fetch_all($result);
var_dump($result);
mysqli_close($connect);
