<?php
// Start the session
session_start();
?>
<?php
include("databaseconfig.php");
 $name=$_POST["username"];
	 $pwd=$_POST["pwd"];

$password= password_hash($pwd, PASSWORD_DEFAULT);

$authenticate = mysqli_query($conn, " SELECT pwd,agentid FROM agents where name='$name'"); 
//$row = mysqli_fetch_assoc($filesrecords);
//$pwdarray=array();



while($row = mysqli_fetch_assoc($authenticate)){
//	array_push($pwdarray, $row['pwd']);
	$fetchedpwd=$row['pwd'];
	$fetchedagentid=$row['agentid'];


}
//echo $fetchedpwd;
//echo "     ";
//echo $password;

	if (password_verify($pwd, $fetchedpwd)) {
	    $_SESSION["agencyid"] = $fetchedagentid;
	    header("location: companysite.php");
	    echo "<script>console.log( 'session value added' );</script>";

//echo "<script>console.log( '$_SESSION['agencyid']' );</script>";

       }
		
	else {   // 

		 echo "<script>alert('username and password do not  match');</script>";
		 header("location: index.html");  
    }

    echo "<script>console.log( 'session value added' );</script>";


?>