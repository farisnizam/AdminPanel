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

	
<?php
$db=mysqli_connect("localhost","root","","testdb");

$ID=$_GET['ID'];
$sql="select * from phone
where ID='$ID'";
$rs=mysqli_query($db,$sql);
$record=mysqli_fetch_array($rs);
?>

<div class="content">
		<h1 class="tabletitle2">Update the Record for: <?=$record['BRAND']?> <br></h1>
		<section class="displayForm">
		<form name="insert" action="saveupdate.php" method="POST" enctype="multipart/form-data">
			 <table class=tableform border="0">
				 <tr>
					 <td width="50%">Item ID</td>
					 <td width="60%"><input name="ID" type="text" readonly value="<?=$record['ID']?>" maxlength="10" ></td>
				 </tr>
				 <tr>
					 <td>Brand</td>
					 <td><input name="BRAND" type="text" value="<?=$record['BRAND']?>" maxlength="20"></td>
				</tr>
				 <tr>
					 <td>RAM</td>
					 <td><input name="RAM" type="text"  value="<?=$record['RAM']?>" maxlength="20"></td>
				 </tr>
				 <tr>
					 <td>Internal Storage </td>
					 <td><input name="INTERNAL" type="text" value="<?=$record['INTERNAL']?>" maxlength="20"></td>
				 </tr>
				 <tr>
					 <td>Camera</td>
					 <td><input name="CAMERA" type="text" value="<?=$record['CAMERA']?>" maxlength="20" ></td>
				 </tr>
				 <tr>
					 <td>Price</td>
					 <td><input name="PRICE" type="text" value="<?=$record['PRICE']?>" maxlength="20" ></td>
				 </tr>
				 <tr>
					 <td>Image</td>
					 <td><input name="IMAGE" type="file" value="<?=$record['IMAGE']?>" maxlength="20" ></td>
				 </tr>
				 <tr>
					 <td>&nbsp;</td>
					 <td><input class="button_1" name="save" type="submit" value="Save Update">
				 <a class="button_1" href="listing4delete.php">Cancel</a> </td>
				 </tr>
			</table>
		</section>
		</div>

	<footer>
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
