<?php
include('inc_session.php');
?>


Hello, <?php echo $_SESSION['username']; ?>

<a href="logout.php">Logout</a>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<a href="allusers.php">All users</a>
	<h1 style="background-color: #7a2dd8; text-align: center; color: #d1cfd3"; >Dashboard</h1>


</body>
</html>