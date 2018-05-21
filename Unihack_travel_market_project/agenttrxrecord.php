<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php 
include("databaseconfig.php");
 $filesrecords = mysqli_query($conn, " SELECT * FROM agenttransaction"); 
//$row = mysqli_fetch_assoc($filesrecords);
?>
   <?php while($row = mysqli_fetch_assoc($filesrecords)): ?>

<table border="2">
<!-- to add column names
   -->
	<tr><td><?php echo $row['agencyid']; ?></td>
	    <td><?php echo $row['transactiontype']; ?></td>
        <td><?php echo $row['transactionid']; ?></td>
        <td><?php echo $row['transactiontime']; ?></td>
	</tr>
</table>
<?php endwhile;?>






</html>