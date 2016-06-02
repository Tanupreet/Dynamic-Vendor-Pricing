<?php
	$id=$_GET['id'];
	$connection= new Mongo();
	$db=$connection->mydb;
	$id = new MongoId($id);
	$db->mycol->remove(array("_id" => $id));
	header('location:show.php');

?>