<!DOCTYPE html>
<?php
	$con=new mysqli('localhost','root','','db');
	if($con->connect_error)
	{
		echo "DB Not connected";
		die();
	}
	else
	{
		echo "DB connected";
	}
?>
<html>
<head>
<title>iBook.com</title>

	<link rel="stylesheet" type="text/css" href="user/user.css">
	<script type="text/javascript" src="hello.js">
</script>

 </head>
<body background="images/iBook.jpg">
<div class="row">
	<div class="column side">
		<div >
			<img src="images/pp.gif" alt="login" width="300px" height="300px">
		</div>

<h3><font color="purple">Category</font></h3>
		<ul>
			<li><a class="active" href="UserAccount.php"><img src="images/user.jpg" width="20px" height="20px" > Category</a></li>
			<li><a href="setting.html"><img src="images/settings.jpg" width="20px" height="20px"> Science</a></li>
			<li><a href="billing.html"><img src="images/money.jpg" width="20px" height="20px"> Classics</a></li>
			<li><a href="security.html"><img src="images/lock.jpg" width="20px" height="20px"> ShortStories</a></li>
		</ul>
</div>
	<div class="column middle">

		<div>
			<p><font size=10 color="maroon">IBOOK</font></p>
			<p>This information will be displayed publicly .........</p>
		</div>
<form name="myform" action="UserAccount.php" 
		onsubmit="return validateForm()" method="POST">
<pre>
	<b><font size=4>ISBN:</font></b>	<input type="text" name="isbn" value=""> 
<br>
	<b><font size=4>Name:</font></b>	<input type="text" name="Name" value=""> 
<br>
	<b><font size=4>Author:</font></b>	<input type="text" name="Author" value=""> 
<br>
	<b><font size=4>Year:</font></b>		<input type="text" name="Year" value=""> 
<br>
	<b><font size=4>Price:</font></b>	<input type="text" name="Price" value=""> 
<br>
	<b><font size=4>Medium:</font></b>	<select>
  <option name="Medium" value="English">English</option>
  <option name="Medium" value="Sinhala">Sinhala</option>
</select> </pre>
<br>
	<input type="submit" name="delete" value="delete">
	<input type="submit" name="update" value="update">
	<input type="submit" name="create" value="create">
<?php	
	if(isset($_POST['create']))
			{
				$ISBN=$_POST['isbn'];
				$name=$_POST['Name'];
				$author=$_POST['Author'];
				$year=$_POST['Year'];
				$price=$_POST['Price'];
				$medium=$_POST['Medium'];
				
			
					$sql="INSERT INTO books(ISBN,name,author,year,price,medium) VALUES('$ISBN','$name','$author','$year','$price','$medium')";
					
			
						if($con->query($sql))
					{
						echo "Created Successfully";
					}
					else
					{
						echo "Failure";
					}
			}
			
			if(isset($_POST['update']))
			{
				$ISBN=$_POST['isbn'];
				$name=$_POST['Name'];
				$author=$_POST['Author'];
				$year=$_POST['Year'];
				$price=$_POST['Price'];
				$medium=$_POST['Medium'];
				
			
			
			
					$sql="UPDATE books SET name= '$name', author= '$author', year= '$year', price= '$price' WHERE ISBN=$ISBN";
					
			
						if($con->query($sql))
					{
						echo "Updated Successfully";
					}
					else
					{
						echo "Failure";
					}
			}
			
			if(isset($_POST['delete']))
			{
				$ISBN=$_POST['isbn'];
				
				
			
		
					$sql="DELETE from books WHERE ISBN=$ISBN";
				
					
			
						if($con->query($sql))
					{
						echo "Deleted Successfully";
					}
					else
					{
						echo "Failure";		
					}
			}
			
	?>

</form>


	</div> 
</div>

</body>
</html>
