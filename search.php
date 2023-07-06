<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=login",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `users` WHERE username = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Username</th>
				<th>Name</th>
				<th>Semester</th>
				<th>CGPA<th>
				<th>JEE Rank</th>
				<!----
                <th>JEE Rank</th>
				<th>Section</th>
				<th>Gender</th>
                 -->
			</tr>
			<tr>
				<td><?php echo $row->username ; ?></td>
				<td><?php echo $row->name;?></td>
				<td><?php echo $row->semester; ?></td>
				<td><?php echo $row->cgpa;?></td>
				<td><?php echo $row->jee_rank; ?></td>
                
                 
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}
?>