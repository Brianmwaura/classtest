<?php
mysql_connect("localhost","root","");

$dbconn=mysql_select_db("zalego");
$username=$_REQUEST['username'];
//
$sql ="INSERT INTO students(USERNAME)VALUES('$username')";

$query = mysql_query($sql)or die (mysql_error());

if($query)
{
 echo"successful";
}else{   
	echo"failed";
}

?> 


