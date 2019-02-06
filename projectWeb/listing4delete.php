<?php
//include the connection details
$db=mysqli_connect("localhost","root","","testdb");
//Create SQL query
$query="select ID, BRAND, RAM, INTERNAL, CAMERA, PRICE, IMAGE
from phone
order by ID asc";
//Execute the query
$qr=mysqli_query($db,$query);
if($qr==false){
echo ("Query cannot be executed!<br>");
echo ("SQL Error : ".mysqli_error($db));
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Project WEB</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>Mudah<span class="highlight">boss</span>ku.my</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="InsertForm.php">Insert</a></li>
					<li  class="current"><a href="listing4delete.php">Edit</a></li>
				</ul>
				</ul>
			</nav>
		</div>
	</header>

	<div class="content">
<?php
//Check the record effected, if no records,
//display a message
	if(mysqli_num_rows($qr)==0){
	echo ("No record fetched...<br>");
	}//end no record
	else{//there is/are record(s)
	?>
	<section class="displayItem">
		<h1 class="tabletitle">Table for Update & Delete</h1>
		<table class=tableDisplay width="90%" border="1">
			 <tr align="center">
				 <th>ID</th>
				 <th>Brand</th>
				 <th>RAM</th>
				 <th>Internal Storage</th>
				 <th>Camera</th>
				 <th>Price</th>
				 <th></th>
				 <th></th>

			 </tr>
<?php
		while ($rekod=mysqli_fetch_array($qr)){
?>
			<tr>
				 <td><?=$rekod['ID']?></td>
				 <td><?=$rekod['BRAND']?></td>
				 <td><?=$rekod['RAM']?></td>
				 <td><?=$rekod['INTERNAL']?></td>
				 <td><?=$rekod['CAMERA']?></td>
				 <td><?=$rekod['PRICE']?></td>
				 <td><a class="button_update" href="formupdate.php?ID=<?=$rekod['ID']?>" >Update</a>
				 </td>
				 <td>
				 	<a class="button_delete" href="confirmdelete.php?ID=<?=$rekod['ID']?>" >Delete</a>
				 </td>
			</tr>
<?php
}//end of records
?>
		</table> 

</script>
		
	</section>
<?php
}//end if there are records
?>
</div>

	<footer>
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
