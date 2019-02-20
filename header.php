<?php
include('database.php'); 
include('adressbookclass.php');
?>
<html>
<body>
<head>
	<title>Adressbook</title>

	
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="datatables/css/dataTables.bootstrap.css">


<link rel="stylesheet" href="datatables/css/jquery.dataTables.min.css">


</head>
<body>
	<style>
table, td, th {
  border: 3px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}

.button2 {background-color: white;} 
.button3 {background-color: white;}
.error {color: #FF0000;}

.action-btn{
	background: transparent;
    border: 0;
.container {
  width: 500px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
}
	
}
</style>
<h4 align = "center">
 <nav role='click'>
 	<h1 style ="color: Gray;">Address Book<br></h1>
<a href="index.php"><h3> Menu</h3> </a> 
<br><a href="add.php"> Add Record</a>
<a href="list.php">List Record</a>
<a href="search.php">Search a Record</a>
</nav>
</h4>
