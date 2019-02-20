<?php 
include('header.php'); 

//include ('index.php');
$record = new addressbook();
$rez = $record->listed();

?>
</head>
<body>

<table id="userdatatable" style="width:100%">
<thead>
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Actions </th>
</tr> 
</thead>
<tbody>
<?php

$counter=1;
while ($row=mysqli_fetch_array($rez))
{ ?>
<tr id="remove_<?php echo $row['id'];?>">
	   <td><?php echo $counter++?></td>
	   <td><?php echo $row['name']  ?></td>
	   <td><?php echo $row['number']?></td>
	   <td><?php echo $row['email'] ?></td>
	   <td>

		<button type="button" class="action-btn">
			<a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm" target="_blank"><span class="glyphicon glyphicon-edit"></span></a>
		</button>
		<button type="button" id="Delete_<?php echo $row['id'];?>"  class="action-btn">
			<a href="javascript:;" onclick="Delete(<?php echo $row['id'];?>)" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
		</button>
		</td>
</tr>
<?php
}?>
</tbody>
</table>
<?php
include ('footer.php');
?>
<script>

$(document).ready(function() {
    $('#userdatatable').DataTable();
});

function Delete(value) 
{	
    var r = confirm('Do you really want to Delete this record!');
    if(r == true)
	{
	  	$.ajax({
	       	type: "POST",
	       	url: 'ajax.php',
	       	data:{action:'Delete',id: value},
		   	dataType: 'json',
	       	success:function(data) 
			{	  
	   			$('#remove_'+value).remove();
			}
		});
	}
}

</script>
