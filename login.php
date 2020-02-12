
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Travel Guru</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="styletop.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="frame.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<p>hngbfvdsa</p>

<?php include('config.php'); ?>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
	require_once('config.php');
    $error_msg = "";
	$s="select * from users where username='" . $_POST["t1"] . "' and pwd='" . $_POST["t2"] ."'";
	
	$q=mysqli_query($link,$s);
	$r=mysqli_num_rows($q);
$data=mysqli_fetch_array($q);
	mysqli_close($link);
	if($r>0)
	{
		$_SESSION["username"]= $_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";
		header("location:index.php");
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>



<?php include('logintop.php'); ?>
<div style="padding-top:150px; box-shadow:1px 1px 20px black; min-height:570px" class="conture">
<div class="col-sm-3" style=" min-height:450px;">

</div>
<div class="col-sm-9">




<form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table border="0" width="500px" height="400px" align="left" class="tableshadow">
<tr><td colspan="2" class="toptd"><img src="lo.jpg" width="550px" height="100px" /></td></tr>

<tr><td><img src="gggh.jpg" width="200px" height="200px" /></td>
<td class="lefttxt"><table border="0" width="100px" height="200px"><td>User Name</td></td><td><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" /></td></tr>
<tr><td class="lefttxt">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" /></td></tr></table>
<tr><td></td><td align="center" ><input type="submit" value="LOGIN" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
</body>
</html>