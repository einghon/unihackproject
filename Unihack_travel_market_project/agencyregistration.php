<?php 
include("databaseconfig.php");

	 $name=$_POST["company_name"];
	 $phone=$_POST["telephone"];
	 $address=$_POST["email"];
	 $email=$_POST["phyaddress"];
	 $walletaddress=$_POST["walletAddr"];
	 $purepassword=$_POST["password"];
	  echo "<script>console.log( '$purepassword' );</script>";

//$password=md5[$purepassword];
$password= password_hash($purepassword, PASSWORD_DEFAULT);
	  echo "<script>console.log( '$password' );</script>";


$agency=array($name,$phone,$address,$email,$walletaddress,$purepassword);
$hasharr = md5(print_r($agency, true));
//echo
//echo $hasharr;

$data = array(
                'key' =>"1",
                'value' =>$hasharr,
                'addr' => '18ehjfYxT7GHh8FcXrw1f2at1cVfrWhumhHegP',
                'privkey' => 'V5AN1ER5TfwTqvLAyv7PVNSzfSTs745cEV8ZF7rsU1P84V5tS4DPqfHQ',

);
# Create a connection
$url = 'https://sendkudo.org/api/v1/storestream';
$ch = curl_init($url);
# Form data string
$postString = http_build_query($data, '', '&');
# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Get the response

$result = curl_exec($ch);
if(curl_errno($ch) !== 0) {
    error_log('cURL error when connecting to ' . $url . ': ' . curl_error($ch));
}

curl_close($ch);
//print_r($result);
 $obj = json_decode($result);
 $tranid=$obj->trxid;
 
//echo gettype($tranid);


//ADDING TO MYSQL DATABASE TABLE
 $sql = "insert into agenttransaction (transactiontype,transactionid) values ('agency registration','$tranid');";
 $sql .= "insert into agents (name,email,phone,phyaddress,walletAddr,pwd) values('$name','$email','$phone','$address','$walletaddress','$password')";



if (mysqli_multi_query($conn, $sql)) {
    echo "<script>console.log( 'new record have been added' );</script>";
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully registered as a agency');
    window.location.href='index.html';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>