<?php

$mysqli=new mysqli("merabite.db.10424157.hostedresource.com","merabite","Ashwini@0529","merabite");
date_default_timezone_set('Asia/kolkata');
if(mysqli_connect_errno())
{
		printf("Connection failed %s",mysqli_connect_error());
		exit();
}
?>
