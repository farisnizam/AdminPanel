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
<html >
<head>
	<title>Project WEB</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body >
	<header>
		<div class="container">
			<div id="branding">
				<h1>Mudah<span class="highlight">boss</span>ku.my</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="InsertForm.php">Insert</a></li>
					<li><a href="listing4delete.php">Edit</a></li>
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
		<h1 class="tabletitle">Available  Phone</h1>
		<table class=tableDisplayItem width="90%" border="1">
			<tr align="center">
				 <th width="40%"></th>
				 <th width="60%">Details</th>
			</tr>
<?php
		while ($rekod=mysqli_fetch_array($qr)){
?>
			<tr>
				 <td><?php echo "<img class=displayImage src='images/".$rekod['IMAGE']."' >";?></td>

				<td>
					<p>Brand: <?=$rekod['BRAND']?></p>
					<p>RAM: <?=$rekod['RAM']?></p>
					<p>Internal Storage: <?=$rekod['INTERNAL']?></p>
					<p>Camera: <?=$rekod['CAMERA']?></p>
					<p>Price: <?=$rekod['PRICE']?></p>
					
				</td>
				
			</tr>
<?php
}//end of records
?>
		</table>
	</section>	

</div>
<?php
}//end if there are records
?>
	

	


	<footer>
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
