<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject (2)";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM data Where type='user'";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">		table, td,th{
		border: 1px solid #ddd;
  		padding: 8px;
  		border:double;
      border-color: blue;		
		}

		table{
			border-collapse:collapse;
			width :60%;

		}
    th,td{
      color: yellow;
    }
    body{
      background: url(view.jpg) no-repeat center center fixed ;
      background-size: cover;
      height: 100%;


    }
    h1{
      color: blue;
    }
	</style>
</head>
<body>

 <form >
      <h1>View Users</h1>
  <table>
  <tr>
    <th>Id</th>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Type</th>

  </tr>
<?php
while($row = $result -> fetch_array(MYSQLI_ASSOC)) {             
        $id = $row['id'];
        $fname = $row['First_Name'];
        $lname = $row['Last_Name'];
        $email = $row['Email'];
        $g = $row['Gender'];
        $t = $row['type'];  
        ?>
  <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $fname; ?></td>
    <td><?php echo $lname; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $g; ?></td>
    <td><?php echo $t; ?></td>
  </tr>
     <?php
    }   
   
    
  ?>
</table>  
<br>

</form>
</body>
</html>