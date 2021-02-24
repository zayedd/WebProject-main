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
          color:red;
          font-style:italic;
        }

        table{
          width: 100%;
          border-collapse: collapse;
        }
        body{
          background-image: url('search.jpg');
          background-size: cover;
          height: 100%;
        }
      </style>
      <link rel="stylesheet" href="project.css">
  </head>
    <body>
  
    </body> 
</html>
<?php
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

$search=$_POST['search'];
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
$sql= "SELECT  * FROM orders WHERE First_Name LIKE '%". $search . "%' or Last_Name LIKE '%". $search . "%' or  Amount LIKE '%". $search . "%' or Product LIKE '%". $search . "%' or  orderId LIKE '%". $search . "%' or UserId LIKE '%". $search . "%' ";
if($result = mysqli_query($conn,$sql))
{
    
    if(mysqli_num_rows($result)>0){
      echo"<h6>". "Result/s". "</h6>";
      echo"
        <table>
        <tr>
          <th>orderId</th>
          <th>UserId</th>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>Amount</th>
          <th>Product</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {             
            echo" <tr>
            <td>".$row['orderId']."</td>
            <td>".$row['UserId']."</td>
            <td>".$row['First_Name']."</td>
            <td>".$row['Last_Name']."</td>
            <td>".$row['Amount']."</td>
            <td>".$row['Product']."</td>  
      <tr>";

    }

}
else{
    echo"<h6>". "No Matches Found Re-Enter Data Please!!!". "</h6>";
}
}
else {
  # code...
  echo"<h6>". "ERROR No Connections!!!". "</h6>";
}

?>

