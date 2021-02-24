<?php
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject (2)";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
$rh=$_POST['rh'];
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM data WHERE (First_Name LIKE '%". $rh . "%' or Last_Name LIKE '%". $rh . "%' or  Email LIKE '%". $rh . "%' or Gender LIKE '%". $rh . "%' or  id LIKE '%". $rh . "%' or  data.GroupID LIKE '%". $rh . "%') AND type='user'";
if(isset($_GET['rem']))
{
  foreach($_GET['remove'] as $r)
  {
   

    $null="0";
    $get="SELECT GroupID FROM data WHERE id=$r";
    mysqli_query($conn,$get);

    while($row = $get -> fetch_array(MYSQLI_ASSOC))
    {
      $ugid=$row['GroupID'];
    }
    if ($ugid==0) {
      # code...
      echo"<h3>"."ERROR User dont have group to be removed from!!"."</h3>";
    }
    else {
      # code...
      $query = "UPDATE data SET data.GroupID=0  WHERE data.id=$r";
      if (mysqli_query($conn,$query)) 
      {
        echo "<h3>"."Hicker/s Removed successfully"."</h3>";
      } 
      else 
      {
        echo "Error: " . $query . "<br>" . $conn->error;
      }
    }

  }
}
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Hicker</title>
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
    h4{
      color:black;
      font-weight:bold;
    }
    h4{
      color:red;
      font-weight:bold;
    }
	</style>
</head>
<body>
    <form >
     

     <?php
          if (mysqli_num_rows($result)>0){
            ?>
     <table>
     <tr>
          <th>Id</th>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>GroupID</th>
          <th>Type</th>
          <th>Remove</th>
  </tr>
     <?php
      
        while($row = $result -> fetch_array(MYSQLI_ASSOC)) {             
          $id=$row['id'];
          $fn=$row['First_Name'];
          $ln=$row['Last_Name'];
          $e=$row['Email'];
          $g=$row['Gender'];
          $gid=$row['GroupID'];
          $t=$row['type'];
     
     ?>
  


  <tr>
            <td><?php echo $id; ?></td>
              <td><?php echo $fn; ?></td>
              <td><?php echo $ln; ?></td>
              <td><?php echo $e; ?></td>
              <td><?php echo $g; ?></td>
              <td><?php echo $gid; ?></td>
              <td><?php echo $t; ?></td>
              <td><input type="checkbox" name="remove[]" value="<?php echo $row['id']; ?>"></td>
  </tr>
     <?php
        }
    
  ?>
</table>  
<br>
<button type="submit" name="rem">Remove</button> 

<?php
}
 else {
   echo"<h4>"."No Data Available Re-Enter Data Please!!"."</h4>";
 }

?>
</form>

</body>

</html>