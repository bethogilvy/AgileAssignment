<?php include "../Includes/db.inc.php";?>
<html>
	<title>User Management</title>
	<body>
		<h1> Manage Users </h1>
		
		<div>
			<button onclick="location.href='CreateUser.php';" type="button">Create Account</button>
			
			<table>
				<tr>
					<th>User</th>
				</tr>
				<?php
					
					$query = "SELECT UserName FROM User";
					$result = mysqli_query($conn, $query);
						
					while($row = mysqli_fetch_array($result)){
						
						echo "<tr>";

						echo "<td>" . $row['UserName'] . "</td>";
						echo '<button onclick="location.href=\'ManageUser.php\';" type="button">Manage</button>';

						echo "</tr>";
						
					}
					
				?>
				</tr>
			</table>
		</div>
	</body>

</html>
