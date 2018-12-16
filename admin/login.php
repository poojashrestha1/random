<?php
include("connection.php");
$stmt= "INSERT INTO login(id,username,password,email,role,status) VALUES (8,'pooja','pooja123','pooja@gmail.com',5,7)";
$qry=mysqli_query($con, $stmt);
if($qry)
{
	echo "Data Inserted";
}
else
{
	echo "ERROR";
}
?>