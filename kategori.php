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
    <tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Category</b></td></tr>
    <?php


    $s="select * from category";
    $result=mysqli_query($link,$s);
    $r=mysqli_num_rows($result);
    //echo $r;

    while($data=mysqli_fetch_array($result))
    {
	
		echo "<tr><td style=' padding:5px;'><b><a href='pakete.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

    }
    mysqli_close($link);
    ?>

    </table>

    </div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Miresevini në guidën tonë. </td></tr>
<tr><td class="paraText" width="900px">Zgjidhni qytetin tuaj të preferuar për të kaluar pushimet tuaja.
Eksploroni turizmin malor, bregdetar dhe ate historik ne Shqiperi. Vizitoni Slpet Shqipetare ne Theth dhe pikat me turistike aty apo Dajtin me teleferik apo me makinen tuaj personale dhe ekploroni natyren dhe shume aktivitete qe organizohen ne pakun natyror. Nuk mund te harrojme Dardhen dhe mundesine qe ofron per sportin e skive. Shikoni vplazhet me te bukura te rivieres shqipetare me durresin , dhermi apo karaburun. Dhe se fundi nuk mund te leme pa vizituar dhe anen historike te shqiperise si Vlora, Tirana, Shkodra e shume qytete te tjera.</td><td style="background-image:url(wlppic.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="700px" height="250px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">Pushime te kendshme!&nbsp;&nbsp;&nbsp;</div></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom1.php'); ?>	
</body>
</html>