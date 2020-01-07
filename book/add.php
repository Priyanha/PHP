<html>
<head>
	<title>Add Books</title>
	<link rel="stylesheet" type="text/css" href="boo.css">
	
	<script type="text/javascript" src="bo.js">
</script>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1" onsubmit="return validateForm()">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Author</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="text" name="year"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr> 
				<td>Medium</td>
				<td><select>
					<option name="medium" value="English">English</option>
					<option name="medium" value="Sinhala">Sinhala</option>
				</select></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$author = $_POST['author'];
		$year = $_POST['year'];
		$price = $_POST['price'];
		$medium = $_POST['medium'];
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO books(name,author,year,price,medium) VALUES('$name','$author','$year','$price','$medium')");
		
		echo "Book added successfully. <a href='index.php'>View Books</a>";
	}
	?>
</body>
</html>