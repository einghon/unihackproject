<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include("databaseconfig.php");
$totalamount=$_POST['value'];
$privkey=$_POST['publickey'];
$userwalletAddr=$_POST['addr'];
// echo $totalamount;
// echo $privkey;
// echo $userwalletAddr;
			// $json = file_get_contents('https://sendkudo.org/api/v1/sendkudo/'.$userwalletAddr.'/1S4VKNcDyQFvxNi5Ljf9LUaX4AtpgzUfLU8ZHr/'.$totalamount.'/'.$privkey.'');
$agentid=$_POST['agentid'];

 $filesrecords = mysqli_query($conn, " SELECT walletAddr FROM agents where agentid='$agentid'"); 
 $row = mysqli_fetch_assoc($filesrecords);
 $agentwallet=$row['walletAddr'];


$json = file_get_contents('https://sendkudo.org/api/v1/sendkudo/'.$userwalletAddr.'/'.$agentwallet.'/'.$totalamount.'/'.$privkey.'');

			 $obj = json_decode($json);
 //echo $obj;

			 $traxid=$obj->trx_id;
			 $_SESSION['traxid']=$traxid;
			 //echo $_SESSION['traxid'];




 //$operationtime=date("l jS \of F Y h:i:s A");
 //echo $traxid.' '.$fromaddr.' '.$toaddr.' '.$ammount.' '.$operationtime;

echo '<script language="javascript">';
echo 'alert("your tour package id is'.$traxid.'")';
echo '</script>';
 $sql="insert into tradetrx (trxid,fromaddr,toaddr,ammount) values ('$traxid','$userwalletAddr','','$totalamount')";


if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('get ready for your trip.');
    window.location.href='modifyconfirm.php';
    </script>");
} 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 //$hex=hex2bin($obj->data);
//var_dump($hex); ?>
	<title></title>
</head>
<body>

</body>
</html>