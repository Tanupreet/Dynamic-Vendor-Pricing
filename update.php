<?php
$id=$_GET['id'];
$connection=new Mongo();
$db=$connection->mydb;

$id = new MongoId($id);
$m=$db->mycol->findOne(array('_id' => $id));
?>

<html>
<body>
<form action="updatedata.php" method="POST">
<input type="text" name="Name" value="<?php echo $m['Name']?>"/>
<input type="text" name="ID" value="<?php echo $m['Id']?>"/>
<input type="hidden" name="id" value="<?php echo $m['id']?>"/>
<input type="submit" value="Submit">
</form>
</body>
</html>