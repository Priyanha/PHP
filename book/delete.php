<?php

include_once("Config.php");

$isbn = $_GET['isbn'];

$result = mysqli_query($mysqli, "DELETE FROM books WHERE isbn=$isbn");

header("Location:index.php");
?>