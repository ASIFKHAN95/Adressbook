<?php
include('header.php');
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	
	//print_r($_POST); exit;
  $record = new addressbook();
	$record->create($name,$number,$email);			
}
$nameErr = $numberErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name =($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  } 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email =($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
     }
  }
}
?> 
<h4 align = "center">
<strong > ADD Record</strong>
</h4>
<form method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "container"> 
   <div class="form-group">
      <label class="sr-only" for="name">Name:</label>
      <input type="name" class="form-control" name="name" placeholder="Enter Name"  name="name" required ><span class="error"> <?php echo $nameErr;?></span>
    </div>
    <div class="form-group">
      <label class="sr-only" for="number">Number:</label>
      <input type="Phone" class="form-control" name="number" placeholder="Enter Ph Number"  name="number" required ><span class="error"> <?php echo $numberErr;?></span>
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email"  name="email" required ><span class="error">* <?php echo $emailErr;?></span>
    </div>
<br><input type= "submit" name="submit" value="send">
</form>