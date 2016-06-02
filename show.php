<?php
$connection= new Mongo();
$db=$connection->mydb;
$m=$db->mycol->find();


?>

<html>
<head>

</head>

<body>
<a href="crud.php">Add</a>

<table border=2>
	<tr>
		<td>Name</td>
		<td>Id</td>
		<td>Action</td>
	</tr>
	<?php
	foreach($m as $r){
	?>
	<tr>
		<td><?php echo $r['Name'] ?></td>
		<td><?php echo $r['Id'] ?></td>
		<td><a href="update.php?id=<?php echo $r['_id']; ?>">Update</a>||
		<a href="delete.php?id=<?php echo $r['_id']; ?>">Delete</a></td>
	</tr>
	<?php	
	}
	?>
</table>
</body>
</html>