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
	<<?php include('top1.php');   ?>
	<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px" >
<tr><td style="font-size:18px" color="#09F">Kategorite</td></tr>
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
<table cellpadding="0px" cellspacing="0" width="1000px" >
<tr><td class="headingText">Paketat Turistike</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px" border="0">
<tr>
<td>

<table border="0" width="600px" height="400px" align="center" >
<?php

$s="select * from pakete,category where pakete.category=category.Cat_id and pakete.pak_id='" . $_GET["pid"] ."'";
$result=mysqli_query($link,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($link);
?>
 

<tr><td colspan="3"><span class="middletext">Emri:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td class="middletext"><img src="travelimg/<?php echo $data[4];?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="travelimg/<?php echo $data[5];?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="travelimg/<?php echo $data[6];?>" width="200px" height="200px"  /></td>
</tr>
<tr><td  colspan="3" height="90px"><span class="middletext">Kategoria:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $data[2];?>
 <br/>
 <span class="middletext">Cmimi:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $data[3]; echo"$"?>
</td></tr>
<tr><td colspan="3"><p><?php echo $data[8];?></p></td></tr>
<tr><td align="left" colspan="3" height="50px"><a href="rezervo.php?pid=<?php echo $data[0];   ?>"><input type="button" value="Rezervo" name="sbmt" /></a></td></tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom1.php'); ?>
</body>
</html>