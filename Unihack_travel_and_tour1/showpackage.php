<?php
	session_start();
	  
	include("databaseconfig.php");
	$agentid=$_SESSION['agencyid'];
	$fetchpackdata = mysqli_query($conn, " SELECT *  FROM package where agencyid='$agentid'");
	$num_rows = mysqli_num_rows($fetchpackdata);
    
    $packdata[][]=array();

while($row = mysqli_fetch_assoc($fetchpackdata)){
//	array_push($pwdarray, $row['pwd']);
	for($i=0;$i<$num_rows;$i++){
			$packdata[$i][0]=$row['packageid'];
			$packdata[$i][1]=$row['title'];
			$packdata[$i][2]=$row['mainloc'];
			$packdata[$i][3]=$row['catagories'];
			$packdata[$i][4]=$row['onservices'];
			$packdata[$i][5]=$row['offservices'];
			$packdata[$i][6]=$row['price'];
			$packdata[$i][7]=$row['route'];
			$packdata[$i][8]=$row['description'];
			$packdata[$i][9]=$row['rating'];
			$packdata[$i][10]=$row['cmt'];
			$packdata[$i][11]=$row['duration'];
			$packdata[$i][12]=$row['gallarystr'];
			$packdata[$i][13]=$row['agencyid'];

		
	}
	for($i=0;$i<$num_rows;$i++){
	for($j=0;$j<14;$j++){

     echo $packdata[$i][$j];
		}
		}
		}




?>