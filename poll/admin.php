
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "a_auth.php";
include "a_header.php";
?>
<style type="text/css">
	html{
		height: 100%
	}
	.lng {
  border-collapse: collapse;
  width: 90%;
}
.lng td{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	height: 50px;
}

.lng td, .lng th {
  padding: 8px;
}

.lng tr{
	background-color: white;
	border-top: 10px solid black;
	border-bottom: 10px solid black;
}

.lng tr:hover {background-color: #0BCACC;
color: black;}

.lng th {
  background-color: black;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  size: 15px;
  color: white;
}
</style>


<h1> Welcome <?php echo $_SESSION['ASESS_NAME']; ?> </h1>


<center><h3> Wallpost  </h3></center>
<?php
include "connection.php";

$member = mysqli_query($con, 'SELECT * FROM wallpost ORDER BY id DESC' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><table class="lng" ><tr>
<th>ID</th>		
<th>Username</th>
<th>Post</th>
<th>Posted at</th>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->id;
			$un=$mb->username;
			$fb=$mb->post;
			$ans=$mb->time;
			echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$un.'</td>';
	echo '<td>'.$fb.'</td>';
	echo '<td>'.$ans.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>


<?php include "footer.php" ?>