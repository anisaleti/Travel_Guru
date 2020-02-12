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
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:18px" color="#09F">Category</td></tr>
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
<tr><td class="headingText">Packages</td></tr>
<tr><td class="paraText" width="900px">




<table cellpadding="0" cellspacing="0" width="900px">


<?php
$s="select * from pakete where pakete.category='" . $_GET["catid"] ."'";
$result=mysqli_query($link,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>
		


<tr>
<?php

	}?>
<td>

<table border="0" width="100px">

<tr><td align="center" style="background-color:#60B0E6; font-size:20px; font-family:Lucida Calligraphy; color:#FFF"><?php echo $data[1]; ?></td></tr>
<td class="middletext" style="padding-left:15px"><img src="travelimg/<?php echo $data[5];?>" width="200px" height="200px"  /></td>
<tr><td align="center" style="background-color:#60B0E6; font-size:20px; font-family:Lucida Calligraphy; color:#09F"><a href="detail1.php?pid=<?php echo $data[0];   ?>"><font color="#FFFFFF">View Detail</font></a></td></tr>
</table>
</td>
<?php

if($n%3==2)
{
?>
</tr>

<?php
}
$n=$n+1;
}
mysqli_close($link);
?>

</table>


</td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom1.php'); ?>
</body>
</html>