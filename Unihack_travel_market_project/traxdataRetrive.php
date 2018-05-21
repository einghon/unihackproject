<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php 
include("databaseconfig.php");
 $filesrecords = mysqli_query($conn, " SELECT * FROM tradetrx"); 
//$row = mysqli_fetch_assoc($filesrecords);
?>
   <?php while($row = mysqli_fetch_assoc($filesrecords)): ?>

<table border="2">
<!-- to add column names
   -->
	<tr><td><?php echo $row['trxid']; ?></td>
	    <td><?php echo $row['fromaddr']; ?></td>
        <td><?php echo $row['toaddr']; ?></td>
        <td><?php echo $row['ammount']; ?></td>
        <td><?php echo $row['time']; ?></td>

	</tr>
</table>
<?php endwhile;?>






</html>