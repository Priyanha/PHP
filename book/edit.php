<?php
include_once("Config.php");
 
if(isset($_POST['update']))
{	
	$isbn = $_POST['isbn'];
	
	$name=$_POST['name'];
	$author=$_POST['author'];
	$year=$_POST['year'];
	$price=$_POST['price'];
	$medium=$_POST['medium'];
		
	$result = mysqli_query($mysqli, "UPDATE books SET name='$name',author='$author',year='$year',price='$price',medium='$medium' WHERE isbn=$isbn");
	
	header("Location: index.php");
}
?>
<?php
$isbn = $_GET['isbn'];

$result = mysqli_query($mysqli, "SELECT * FROM books WHERE isbn=$isbn");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$author = $user_data['author'];
	$year = $user_data['year'];
	$price = $user_data['price'];
	$medium = $user_data['medium'];
}
?>
<html>
<head>	
	<title>Edit Book</title>
	<link rel="stylesheet" type="text/css" href="boo.css">
	
	<script type="text/javascript" src="bo.js">
</script>
</head>
 
<body>
	<a href="index.php">Dashboard</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php" onsubmit="return validateForm()">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Author</td>
				<td><input type="text" name="author" value=<?php echo $author;?>></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="text" name="year" value=<?php echo $year;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price" value=<?php echo $price;?>></td>
			</tr>
			<tr> 
				<td>Medium</td>
				<td><select>
					<option name="medium" value=<?php echo $medium;?>>English</option>
					<option name="medium" value=<?php echo $medium;?>>Sinhala</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="hidden" name="isbn" value=<?php echo $_GET['isbn'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>