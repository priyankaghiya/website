<html>
<head>
<title>Career Guidance</title>
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>
  <?php include("header.php"); ?>
<br><Br><Br>
<?php
	if(isset($_REQUEST['sub']))
{
	$su=$_REQUEST['sub'];
	if($su=="SUBMIT")
	{
		$na=$_REQUEST['b1'];
		$e=$_REQUEST['b2'];
		$q=$_REQUEST['b3'];
		$link=new mysqli("localhost","root","","college");
		$link->query("insert into querytab values('$na','$e','$q')");
		$link->close();
	}
	else
	{
		echo "Unspecified Error Occured";
	}	
}
else
{?>
	<div class="abc"><br><Br>
	<center>
	<form name="f1" action="feedback.php">
	<b>Name : </b><input type="text" name="b1"><br><br>
	<b>E-mail : </b><input type="text" name="b2"><br><br>
	<b>Share your experience : </b><textarea placeholder="Place Your Query Here" name="b3" cols="30" rows="5"></textarea><br><br>
	<input type="submit" name="sub" value="SUBMIT" class="aa"><br><Br>
	</form>
	<center>
</div>
<?php } ?>
</body>
</html>