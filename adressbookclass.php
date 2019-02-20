<?php
 
class addressbook
{
    function create($name,$number,$email)
    {
    	global $db;
	    $sql ="INSERT INTO adress(name,number, email) VALUES ('$name','$number','$email')";

		$result = mysqli_query($db,$sql);
       	return $result;
	}			


function search($key)
{    global $db;
	$query ="SELECT * FROM adress WHERE name LIKE '%$key%'";
	$result = mysqli_query($db,$query);
	return $result;
	
}


function listed()

{   global $db;
	$query="SELECT * FROM adress WHERE is_deleted = '0' ";
    $rez=mysqli_query($db,$query);
    return $rez;

}


function getByID($id)
{
    global $db;
	$sql ="SELECT * FROM `adress` WHERE id='$id'";
	$result = mysqli_query($db,$sql);
	return $result;
}

function update($id,$name,$number,$email)
{
	global $db;

    $sql ="UPDATE `adress` SET name='$name',number='$number',email='$email'  WHERE id='$id'";
    $result = mysqli_query($db,$sql); 
    return $result;

}




}

?>