<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webproject (2)";
    
    include"navbar.php";
  
    // Create connection
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    
    // Check connection
    //$dg=$_POST['dg'];
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    
    
  
      if(isset($_GET['del']))
      {
      foreach($_GET['delete'] as $d)
      {
       
          $sql = "DELETE FROM groups WHERE id=$d";
          if ($conn->query($sql) === TRUE) 
          {
            
            
            
            
          echo "<h4>"."Record/s deleted successfully.". "</h4>";
          } 
          else 
          {
          echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
      }
    
    $sql="SELECT * FROM groups";
    $result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
 
  <head>
      <style>
        h1{
          color: purple;
          font-weight: bold;
          font-style: italic;
        }
        h4{
          color: red;
          font-weight: bold;
          font-style: italic;
        }
        table, th, td {
             border: 1px solid white;
        }
        th{
          color:white;
          font-weight: bold;
        }
        td{
          color:black;
          font-style:italic;
          font-weight: bold;
        }

        table{
          width: 100%;
          border-collapse: collapse;
        }
        body{
          background-image: url('wadi.jpg');
          background-size: cover;
          height: 100%;
        }
      </style>
      <link rel="stylesheet" href="project.css">
  </head>
 
    <body>

    <form action="deletegroups.php">
      <h1>Delete Groups</h1>
            <table class="table table-dark table-sm">
        <tr>
          <th>Id</th>
          <th>Place</th>
          <th>Date/Time</th>
          <th>Country</th>
          <th>City</th>
          <th>Price</th>
          <th>Delete</th>
        </tr>


          <?php
          while($row = $result -> fetch_array(MYSQLI_ASSOC)) {             
                  $id=$row['id'];
                  $place=$row['place'];
                  $datetime=$row['datetime'];
                  $country=$row['country'];
                  $city=$row['city'];
                  $price=$row['price'];
                  ?>
            <tr>
              <td><?php echo $id; ?></td>
              <td><?php echo $place; ?></td>
              <td><?php echo $datetime; ?></td>
              <td><?php echo $country; ?></td>
              <td><?php echo $city; ?></td>
              <td><?php echo $price; ?></td>
              <td><input type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>"></td>
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
