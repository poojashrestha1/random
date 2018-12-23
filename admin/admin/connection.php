<?php
$host='localhost';
$user='root';
//root is the superuser/superadmin
$pass='';
$db='scthirdb';
$con=mysqli_connect($host,$user,$pass,$db) or die('Something wrong while connecting to the database');
?>