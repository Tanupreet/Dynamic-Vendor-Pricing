<?php
if($_POST){
	$connection= new Mongo();
	$db=$connection->mydb;
	$id=new MongoId($_POST['_id']);
	$db->mycol->update(
	array("_id" => $id),
	array(
		'$set' => array(
			'Name'=>$_POST["Name"],
			'Id'=> $_POST["Id"]
		)
	)
	);
	header('location:show.php');
}
?>