<?php

$db=mysqli_connect("localhost","root","","adressbook");

if($db)
{
	//echo "connected";
}
 else 
{
	die ("not connected".mysqli_connect_error());
	 echo " connected";

}

?>



