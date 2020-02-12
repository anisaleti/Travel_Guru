<!DOCTYPE html>
<html>
<head>
	<title>Travel Guru</title>
	<link rel="stylesheet" type="text/css" href="frame.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include('config.php');  ?>
	<?php
if(isset($_POST["sbmt"]))
{
	//$link=makeconnection();
  require_once('config.php');
  $error_msg = "";
	$s="insert into rezervo(pakete_id,emri,cel,email,nr_personave) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";	
	
	
		mysqli_query($link,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>

<?php include('top1.php'); ?>
<!--/sticky-->
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:18px" color="#09F">Kategoria</td></tr>
<?php

$s="select * from category";
$result=mysqli_query($link,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='pakete.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Rezervo</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<td>

<table border="0"; width="600px" height="400px" align="center" >
<?php

$s="select * from pakete,category where pakete.category=category.Cat_id and pakete.pak_id='" . $_GET["pid"] ."'";

$result=mysqli_query($link,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($link);
?>
 
<form method="post" enctype="multipart/form-data">
<tr><td colspan="3" class="middletext">ID e Paketes:&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td></tr>
<tr><td colspan="3" class="middletext">Emri i qytetit:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td class="lefttxt">Emri:</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Ju lutem jepni vetem shkronja dhe numra nga 1 ne 50 per emrin"/></td></tr><br/>
<tr><td class="lefttxt">Nr. tel</td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title"Ju lutem jepni nje numer me 10 -12 shifra"/></td></tr><br/>
<tr><td class="lefttxt">Email:</td><td><input type="email" name="t3" required /></td><td><br/>
<tr><td class="lefttxt">Numri i personave:</td><td><input type="number" name="t4" required pattern="[1 _]{1,20}" title"Lejohen grupe ngga 1 deri ne 20 persona."/></td><td><br/>
<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>

</form></td></tr>
</table>
</td>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom1.php'); ?>
</body>
</html>