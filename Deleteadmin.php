<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webproject (2)";
    
    // Create connection
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    
    // Check connection
    $ad=$_POST['ad'];
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    
    $sql="SELECT * FROM data WHERE (First_Name LIKE '%". $ad . "%' or Last_Name LIKE '%". $ad . "%' or  Email LIKE '%". $ad . "%' or Gender LIKE '%". $ad . "%' or  id LIKE '%". $ad . "%') AND type='admin'  ";
  
      if(isset($_GET['del']))
      {
      foreach($_GET['delete'] as $d)
      {
        include"adminnav.php";
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
    
   
    $result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
  <head>
      <style>
        h6{
          color: red;
          font-weight: bold;
          font-style: italic;
        }
        table, th, td {
             border: 1px solid black;
        }
        th{
          color:blue;
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
          
        }
      </style>
      <link rel="stylesheet" href="project.css">
  </head>
 
    <body>

    <form action="Deleteadmin.php">

            <table>
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
