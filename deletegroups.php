  <?php
  include"adminnav.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['del']))
{
  foreach($_GET['delete'] as $d)
  {
    
    $queryChild = "DELETE FROM data WHERE GroupID=$d";
    if ($conn->query($queryChild) === TRUE) 
    {
      $query = "DELETE FROM groups WHERE GroupID=$d";  
      if($conn->query($query)=== True)
      {
        echo "Record/s deleted successfully";
      }
      else{
        echo "parent not deleted";
      }
      
    } 
    else 
    {
      echo "Error: " . $query . "<br>" . $conn->error;
    }
  }
}
$query = "SELECT * FROM groups ";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		table, td,th{
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
      color: red;
    }

    h1{
      color: blue;
    }
	</style>
</head>
<body>
    <form >
      <h1>Delete Groups</h1>
  <table>
  <tr>
    <th>Id</th>
    <th>place</th>
    <th>Date/time</th>
    <th>country</th>
    <th>Delete</th>
  </tr>
<?php
while($row = $result -> fetch_array(MYSQLI_ASSOC)) {             
        $id = $row['GroupID'];
        $place = $row['place'];
        $dtgroup = $row['datetime'];
        $country = $row['country']; 
        ?>
  <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $place; ?></td>
    <td><?php echo $dtgroup; ?></td>
    <td><?php echo $country; ?></td>
    <td><input type="checkbox" name="delete[]" value="<?php echo $row['GroupID']; ?>"></td>
  </tr>
     <?php
    }   
  ?>
</table>  
<br>
<button type="submit" name="del">DELETE</button> 
</form>
</body>

</html>