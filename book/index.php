<?php
include_once("Config.php");
include('session.php');
 
$result = mysqli_query($mysqli, "SELECT * FROM books ORDER BY isbn DESC");
?>
 
<html>
<head>    
    <title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="boo.css">
</head>
 
<body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">SignOut</a></h2>
<a href="add.php">Add New Book</a><br/><br/>

<form action="result.php" method="POST">
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" name="name" size="100"></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table></center>
</form>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Author</th> <th>Year</th> <th>Price</th> <th>Medium</th> <th>Edit</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['author']."</td>";
        echo "<td>".$user_data['year']."</td>";  
		echo "<td>".$user_data['price']."</td>";
		echo "<td>".$user_data['medium']."</td>";
        echo "<td><a href='edit.php?isbn=$user_data[isbn]'>Edit</a> | <a href='delete.php?isbn=$user_data[isbn]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>