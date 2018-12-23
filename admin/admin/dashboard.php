<?php
include('inc_session.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<h1 class="dash">Dashboard</h1>

	<p> Hello, <?php echo $_SESSION['username']; ?>!</p>

	<table id=list>
		<tr>
		<td><a>Users</a></td>
		</tr>
		<tr>
			<th><button><a href="userregister.php">Add</a></button></th>
			<th><button><a href="allusers.php">Display</a></button></th>
		</tr>
		<tr>
		<td>Categories</td>
	    </tr>
	    <tr>
		    <th><button>Add</button></th>
			<th><button>Display</button></th>
		</tr>		
		<tr>
		<td>Posts</td>
		</tr>
		<tr>
			<th><button>Add</button></th>
			<th><button>Display</button></th>
		</tr>
		<tr>	
		<td>Comments</td>
		</tr>
		<tr>
			<th><button>Add</button></th>
			<th><button>Display</button></th>
		</tr>	
	</tr>
	</table>
    <br/>
    <div class="out">     
		<a href="logout.php">Logout</a>
	</div>

</body>
</html>