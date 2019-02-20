<?php
include('header.php'); 
$record = new addressbook();
if (isset($_POST['submit']))
{    $id=$_GET['id'];
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$sql = $record->update($id,$name,$number,$email);
}

if (isset($_GET['id']))
{  
	$id=$_GET['id'];
	$result = $record->getByID($id);
		while ($row = mysqli_fetch_assoc($result))
{
?>

<strong>Update Record</strong><br></br>

<form method="post"></br>
Name<br><input type= "text"name="name" value="<?php echo $row['name'];?>"></br>
Phone<br><input type= "text"name="number" value="<?php echo $row['number'];?>"></br>
Email<br><input type= "text"name="email" value="<?php echo $row['email'];?>"></br>
<br><input type= "submit" name="submit" value="send">
</form>
<strong>
<br><a href="index.php"><b> Main Menu <b>   </a></br>
</strong>
<?php
}
}
?>