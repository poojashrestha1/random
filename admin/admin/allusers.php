<?php
include('inc_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Our users</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="col-md-8">
	<table id=users>
		<thead>
			<tr class="data">
				<td>UID</td>
				<td>Username</td>
				<td>Email</td>
				<td>Role</td>
				<td>Status</td>
				<td>Functions</td>
			</tr>
		</thead>
		<tbody>
			<?php
//selecting all users
$stm="SELECT * FROM users";
//making connection
include('connection.php');
//query
$qry=mysqli_query($con, $stm);

//fetching and printing data

while ($row=mysqli_fetch_array($qry)) 
{
	echo "<tr>";
	echo "<th>".$row['id']."</th>";
	echo "<th>".$row['username']."</th>";
	echo "<th>".$row['email']."</th>";
	echo "<th>".$row['role']."</th>";
	echo "<th>".$row['status']."</th>";
	echo "<th> EDIT | DELETE </th>";
	echo "</tr>";

}
?>
	</tbody>
	</table>
</div>
 

</body>
</html>
