<?php
if($_POST){
	$connection= new Mongo();
	$db=$connection->mydb;
	$rec['Name'] = $_POST['Name'];
	$rec['Id'] = $_POST['Id'];
	$db->mycol->insert($rec);
	header('location:show.php');
}
?>