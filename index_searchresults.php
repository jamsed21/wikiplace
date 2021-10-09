<?php
include "database.php";

$search = $_GET['search'];
$sql = "SELECT * FROM places WHERE place_name LIKE '$search%' LIMIT 5";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
	echo "<li><a href='view.php?place_name={$row['place_name']}'>".$row['place_name']."</a>";
}
?>