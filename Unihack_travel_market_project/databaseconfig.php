<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "unihack";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, $dbname); 
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
    echo "<script>console.log( 'connected to database successfully' );</script>";
 /* $result = mysqli_query($conn, "SELECT * FROM catagories");
  if($result==false){
  	echo " can't fetch rows";
  }
  else
 {while($row = mysqli_fetch_assoc($result))
 echo $row['name'];
}*/
  ?>