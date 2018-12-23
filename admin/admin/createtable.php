<!--
1 prepare statement
2. make connection
3. make query
4. message for success and unsuccess

------------------------------------------------------------------
primary key does not take duplicate values or null value or double intake

------------------------------------------------------------------
mysql -u root;
show databases;
use scthirdb;
ahow tables;
desc users;
-->

<?php
$stmt="CREATE TABLE IF NOT EXISTS users(
      id INT AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(50) NOT NULL,
      password VARCHAR(50) NOT NULL,
      email VARCHAR(50) NOT NULL,
      role TINYINT(2) NOT NULL,
      status TINYINT(1) NOT NULL,
      UNIQUE (username),
      UNIQUE (email)
)";
include('connection.php');
$qry=mysqli_query($con,$stmt) or die(mysqli_error());
if($qry)
{
	echo "Table created successfully";
}
else
{
	echo "Error creating table or might exist";
}
mysqli_close($con);
?>