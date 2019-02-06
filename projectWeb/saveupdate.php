<?php
$db=mysqli_connect("localhost","root","","testdb");
	$ID=$_POST['ID'];
	$BRAND=$_POST['BRAND'];
	$RAM=$_POST['RAM'];
	$INTERNAL=$_POST['INTERNAL'];
	$CAMERA=$_POST['CAMERA'];
	$PRICE=$_POST['PRICE'];
	$IMAGE = $_FILES['IMAGE']['name'];
  	
  	// image file directory
  	$target = "images/".basename($IMAGE);
	move_uploaded_file($_FILES['IMAGE']['tmp_name'], $target);

	$sql="UPDATE phone SET BRAND='$BRAND', RAM='$RAM', INTERNAL='$INTERNAL', CAMERA='$CAMERA', PRICE='$PRICE', IMAGE='$IMAGE' WHERE ID=$ID";

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
		<section class="displayItem" style="padding-top: 350px;">
			<table class=tableform style="text-align: center;" border="0">
		<?php 
			$rs=mysqli_query($db, $sql);

	if($rs==true){
		?>
		<tr>
			<td>The record has been UPDATED</td>
			<td><a class="button_1" href='listing4delete.php'>check the listing</a></td>
		
		</tr>
<?php	}else{ ?>
		<tr>
			<td>The record fail to UPDATED</td>
			<td><a class="button_1" href='formupdate.php'>check the listing</a></td>
		</tr>
		
<?php	}
		?>

			</table>			
		</section>
	</div>



	<footer>
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
