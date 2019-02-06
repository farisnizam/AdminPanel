

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

	<?php

$db=mysqli_connect("localhost","root","","testdb");
$ID=$_GET['ID'];

?>
<section class="content-inside" style="padding-top: 300px;">
	<h1 class="tabletitle" style="text-align: center;">Are u sure to delete the record for <?php echo "$ID ?" ?></h1>
	<table class=tableform  border="1">
		<tr>
			<td><a class="button_1" href="delete.php?ID=<?=$ID?>">Yes</a></td>
			<td><a class="button_1" href="listing4delete.php">No</a></td>
		</tr>
	</table>
	
</section>
</div>

	<footer class="footer">
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
