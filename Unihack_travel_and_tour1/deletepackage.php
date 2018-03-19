<?php
include("databaseconfig.php");

$package=$_POST['packageid'];

	$sql="delete from package where packageid='$package'";
	
	if(mysqli_query($conn,$sql)){
	    
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='companysite.php';
    </script>");
	    }

?>