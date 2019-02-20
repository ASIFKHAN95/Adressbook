<?php include('header.php');
?>
<style type="text/css">
<!--form {  font-family: "roman", Courier, mono; background-color: orange}
body {  font-family: "Times New Roman", Times, serif; background-color: #f0f0f0}
-->
</style>
<?php 
if(isset( $_POST['submit']))
{   
	$key = $_POST['key'];

	$result = new addressbook();
	$record = $result->search($key);
		
	print "<table border = 4><tr><th>ID</th><th>Name</th><th>Phone</th><th>mail</th></tr>";
	while ($row = mysqli_fetch_assoc($record))
{
  echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></td><td>{$row['number']}</td><td>{$row['email']}</td><td></td></tr>";  
}
}
print "</table>";
?>
<form submit="" method="post">
Name <br><input type="text" name="key"><br />
<br><input type="submit" name="submit" value="Search">
</form>
<br> <br>
