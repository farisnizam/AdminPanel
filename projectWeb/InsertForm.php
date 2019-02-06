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
		<h1 class="tabletitle2">Available  Phone</h1>
	<section class="displayForm">
		
		
		<form name="insert" action="insert.php" method="POST" enctype="multipart/form-data">
		<table class=tableform border="0">
			 <tr>
				 <td width="20%">Brand</td>
				 <td width="20%"><input name="BRAND" type="text"></td>
			 </tr>
			 <tr>
				 <td>RAM</td>
				 <td><input  name="RAM" type="text"></td>
			 </tr>
			 <tr>
				 <td>Internal Storage</td>
				 <td><input name="INTERNAL" type="text" maxlength="20"></td>
			 </tr>
			 <tr>
				 <td>Camera</td>
				 <td><input name="CAMERA" type="text" maxlength="10"></td>
			 </tr>
			 <tr>
				 <td>Price</td>
				 <td><input name="PRICE" type="text" maxlength="10"></td>
			 </tr>
			 <tr>
				 <td>Image</td>
				 <td><input  name="IMAGE" type="file" ></td>
			 </tr>
			 <tr>
				 <td>&nbsp;</td>
				 <td><input class="button_1" name="save" type="submit" value="Save Record"></td>
			 </tr>
		</table>
		
	</section>
</div>
	

	<footer>
		<p>Mudahbossku.my, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
