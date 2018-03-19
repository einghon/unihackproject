<?php
	include("databaseconfig.php");
$field=$_POST['field'];
$value=$_POST['value'];
$packageid=$_POST['packageid'];
	$sql="update package set ".$field."=".$value." where packageid='$packageid'";
	
	if(mysqli_query($conn,$sql)){
	    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully added package');
    window.location.href='companysite.php';
    </script>");
	    }
	    else{
	    	echo 'query does not  work ';
	    }



?>