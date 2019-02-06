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
					<li class="current"><a href="listing4delete.php">Edit</a></li>
				</ul>
				</ul>
			</nav>
		</div>
	</header>

	<div class="content">
		<section class="content-inside" style="padding-top: 300px;">
			<h1 class="tabletitle" style="text-align: center;"></h1>
				<table class=tableform style="text-align: center;" border="1">

<?php

$db=mysqli_connect("localhost","root","","testdb");
$ID=$_GET['ID'];


$sql="delete from phone
 where ID='$ID' ";
$q=mysqli_query($db,$sql);
if ($q==true){
	?>
	<tr>
		<td>The record for has been DELETE</td>
		<td><a class="button_1" href="listing4delete.php">Listing</a></td>
	</tr>
<?php
}
else{ ?>
	<tr>
		<td>Fail to delete record</td>
		<td><a class="button_1" href="listing4delete.php">Listing</a></td>
	</tr>
<?php
}
?>

</table>
</section>
</div>

	<footer>
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
