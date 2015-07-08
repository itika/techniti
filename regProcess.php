<?php
include_once("connect.php");
$name=$_POST["txt"];
$name2=$_POST["txt2"];
$college=$_POST["college"];
$others=$_POST["others"];
$email=$_POST["Email"];
$phone=$_POST["contact"];
$query="insert into ambassdor value('$name','$name2','$college','$email','$phone' )";
if(mysql_query($query,$con)==false)
    {
		echo "Plzz Try again..";
		die('error:'.mysql_error());
		echo header("Location: reg.php?msg= Register again");
		
	}
	else
  		echo header("Location: reg.php?msg= You sucessfully registered");
	?>
