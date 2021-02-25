<?php
    session_start();
    include"adminnav.php";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webproject (2)";
    
    // Create connection
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    
    // Check connection
    //$ad=$_POST['ad'];
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    

    
  
      if(isset($_GET['del']))
      {
      foreach($_GET['delete'] as $d)
      {
 
          $sql = "DELETE FROM data WHERE id=$d";
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
    
    $sql="SELECT * FROM data WHERE type='admin'";
    $result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
  <head>
      <style>
        h1{
          color: black;
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
          color:red;
          font-weight: bold;
        }
        td{
          color:white;
          font-style:italic;
          font-weight: bold;
        }

        table{
          width: 100%;
          border-collapse: collapse;
        }
        body{
          background-image: url('wat.jpg');
          background-size: cover;
          height: 100%;
        }
      </style>
      <link rel="stylesheet" href="project.css">
  </head>
 
    <body>

    <form action="Deleteadmin.php">
        <h1>Delete Admin</h1>
            <table class="table table-dark table-sm">
        <tr>
          <th>Id</th>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Type</th>
          <th>Delete</th>
        </tr>


          <?php
          while($row = $result -> fetch_array(MYSQLI_ASSOC)) {             
                  $id=$row['id'];
                  $fn=$row['First_Name'];
                  $ln=$row['Last_Name'];
                  $e=$row['Email'];
                  $g=$row['Gender'];
                  $t=$row['type'];
                  ?>
            <tr>
              <td><?php echo $id; ?></td>
              <td><?php echo $fn; ?></td>
              <td><?php echo $ln; ?></td>
              <td><?php echo $e; ?></td>
              <td><?php echo $g; ?></td>
              <td><?php echo $t; ?></td>
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
