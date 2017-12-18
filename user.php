<?php 

include 'server/dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<title>Cart</title>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 15px;
}

tr:nth-child(even) {
  background-color: #eee;
}

</style>

</head>
<body>


<h2 align="center">Users</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>D.O.B</th>
    <th>Aadhar</th>
    <th>Home Address</th>
    <th>Wallet</th>
  </tr>
<?php 
	
	$items_inCart = mysqli_query($con, "SELECT * from `user`");
	$total_price = 0;
	while($row = mysqli_fetch_assoc($items_inCart)){
		echo   
		'<tr>
	    <td>'.$row['name'].'</td>
	    <td>'.$row['email'].'</td>
	    <td>'.$row['dob'].'</td>
	    <td>'.$row['aadhar'].'</td>
	    <td>'.$row['home'].'</td>
	    <td>'.$row['wallet'].'</td>
  	</tr>';
	}

?>
</table>

</body>
</html>