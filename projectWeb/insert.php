

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
					<li class="current"><a href="InsertForm.php">Insert</a></li>
					<li><a href="listing4delete.php">Edit</a></li>
				</ul>
				</ul>
			</nav>
		</div>
	</header>



		<div class="content">
		<section class="displayItem" style="padding-top: 350px;">
			<table class=tableform style="text-align: center;" border="0">
<?php

$db=mysqli_connect("localhost","root","","testdb");

	$BRAND=$_POST['BRAND'];
	$RAM=$_POST['RAM'];
	$INTERNAL=$_POST['INTERNAL'];
	$CAMERA=$_POST['CAMERA'];
	$PRICE=$_POST['PRICE'];
	$IMAGE = $_FILES['IMAGE']['name'];
  	
  	// image file directory
  	$target = "images/".basename($IMAGE);
	move_uploaded_file($_FILES['IMAGE']['tmp_name'], $target);

	$sql="insert into phone
	(BRAND, RAM, INTERNAL, CAMERA, PRICE, IMAGE)
	values ('$BRAND','$RAM','$INTERNAL',
	'$CAMERA','$PRICE','$IMAGE')";
	$rs=mysqli_query($db, $sql);



if($rs==true){
?>
		<tr>
			<td>The record is SAVED</td>
			<td><a class="button_1" href='insertForm.php'>Insert another record</a></td>
			<td><a class="button_1" href='index.php'>View reords</a></td>
		</tr>
<?php }else{ ?>
		<tr>
			<td>The record fail to  SAVE</td>
			<td><a class="button_1" href='insertForm.php'>Insert another record</a></td>
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
