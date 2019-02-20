<?php
include('database.php');

if (isset($_POST['action']) && $_POST['action']='Delete')
{  
	$id=$_POST['id'];
	$sql ="UPDATE `adress` SET is_deleted='1' WHERE id='$id'";
	$result = mysqli_query($db,$sql);
	echo json_encode(array('status'=>'success'));
}
?>
