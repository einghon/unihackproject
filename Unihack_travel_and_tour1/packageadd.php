<?php
  session_start();
  
  include("databaseconfig.php");

  $agentid=$_SESSION['agencyid'];
	$title=$_POST['title'];
	$location=$_POST['location'];
	$catagories=$_POST['catagories'];
	$onservices=$_POST['onservices'];
	$offservices=$_POST['offservices'];
	$price=$_POST['price'];
	$duration=$_POST['duration'];
	$route=$_POST['routes'];
	$description=$_POST['brief'];
	$catagoryarr=implode(",",$catagories);
	$offservicesarr=implode(",",$offservices);
	$onservicesarr=implode(",",$onservices);

       for ($i = 0; $i < count($_FILES['gallary']['name']); $i++) {
       	$filenames=$_FILES['gallary']['name'][$i];
            //Get the temp file path
            $tmpFilePath = $_FILES['gallary']['tmp_name'][$i];

            //Make sure we have a filepath
            if ($tmpFilePath != "") {
                //Setup our new file path
                $newFilePath = "images/" . $_FILES['gallary']['name'][$i];

                //Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
					//	$sql="insert into filestoring values('$filenames')";
					//	mysqli_query($conn,$sql);
                     $gallaryarr[]=$filenames;
                    // echo "success";
                    //Handle other code here

                }
            }
        }
        $gallarystring=implode(",",$gallaryarr);

      // echo $title;
      // echo $location;
      // echo $catagoryarr;
      // echo $onservicesarr;
      // echo $offservicesarr;
      // echo $price;
      // echo $description;
      // echo $duration;
      // echo $gallarystring;
      // echo $agentid;



	$sql="insert into package (title,mainloc,catagories,onservices,offservices,price,route,description,cmt,duration,gallarystr,agencyid)values('$title','$location','$catagoryarr','$onservicesarr','$offservicesarr','$price','$route','$description','good','$duration','$gallarystring','$agentid')";

	
	if(mysqli_query($conn,$sql)){
	    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully added package');
    window.location.href='companysite.php';
    </script>");
	    }


  elseif (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}


?>