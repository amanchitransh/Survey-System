<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['ASESS_NAME'])!="") {
	header("Location: admin.php");
}
?>
<br>
<script type="text/javascript">
	function mouseoverPass(obj) {
  var obj = document.getElementById('pswd');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('pswd');
  obj.type = "password";
}
</script>
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
		border: solid black;
	}
	.btn:hover{
  background-color:#03CED2;
  color: black ;
}
.pswd img{
	width:52px;
	height: 52px;
	position: absolute;
	display: inline-block;
	float: left;
}

	.box{
	width: 500px;
	height: 400px;
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
<table align="center" width="450px">
	<tr>
		<td colspan="2" ><h1>Admin Login</h1></td>
	</tr>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>

<form action="al_action.php" method="post" id="amyform">
	<tr>
		<td>
<h2>Username : </h2></td>
<td>
<input type="text" name="username" value="" > 
</td>
</tr>
<tr>
	<td>
<h2>Password : </h2></td>
<td>
<div class="pswd">
<input type="password" name="password" value="" id="pswd">
<img src="sp.png" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();"/>
</div>
</td>
</tr>
<tr>
	<td colspan="2">
<input class="btn" type="submit" name="login" value="login" > 
</form>
</td>
</tr>
</table>
</div>
<script type="text/javascript" > 
var frmvalidator = new Validator("amyform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>