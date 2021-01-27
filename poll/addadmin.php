<?php include "a_header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: admin.php");
}
?>
<br>
<br>
<style type="text/css">
	h1,h2{
		color:black;
		text-align: left;
	}
	.btn{
		background-color: black;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		align-self: center;
	}
	.btn:hover{
  background-color:#03CED2;
  color: black ;
  border: solid black;
}
.box{
	width: 700px;
	height: 500px;
	margin: auto;
	background-color: #01C8CB;
	border:solid black;

}
td input{
	width: 200px;
	vertical-align: middle;
}
</style>

<div class="box">
 
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<table cellpadding="0" cellspacing="0" width="600px" align="center">
	<tr style="text-align: center;">
		<td colspan="2" style="vertical-align: middle;"><h1>Add Admin</h1></td>
	</tr>
<form action= "addad.php" method= "post" id="amyform" >
	<tr>
		<td><h2 >Name:</h2></td>
		<td><input type="text" name="name" value="" /></td>
	</tr>
<tr><td><h2 >Username:</h2></td>
<td><input type="text" name="username" value="" /></td>
</tr>
<tr><td><h2 >Password:</h2></td> 
<td><input type="password" name="password" value="" />
</td>
</tr>
<tr>
	<td colspan="2"><br><br><br>
<input class="btn" type="submit" name="submit" value="Next" />
</td></tr>
</form>
</table>
</div>
<script type= "text/javascript" >
 var frmvalidator = new Validator("amyform"); 
 frmvalidator.addValidation("firstname","req","Please enter name "); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>
