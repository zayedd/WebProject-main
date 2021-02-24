<!DOCTYPE html>
<html>
  <head>
      <style>
        h6{
          color: red;
          font-weight: bold;
          font-style: italic;
        }
        h1{
          color: rgb(148,0,211);
          font-weight: bold;
          font-family: sans-serif;
        }
        table, th, td {
             border: 1px solid black;
        }
        th{
          color:red;
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
        
      </style>
      
  </head>
    <body>
  
    </body> 
</html>
<?php

  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject (2)";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

$view=$_POST['view'];
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
$sql="SELECT * FROM data WHERE
 (First_Name LIKE '%". $view . "%')
  AND type='user'  ";
echo $sql;
if($result = mysqli_query($conn,$sql))
{
    
    if(mysqli_num_rows($result)>0){
      echo"<h1>". "View Users". "</h1>";
      echo"
        <table>
        <tr>
        <th>Id</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Email</th>
        <th>Gender</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {             
            echo" <tr>
            <td>".$row['id']."</td>
            <td>".$row['First_Name']."</td>
            <td>".$row['Last_Name']."</td>
            <td>".$row['Email']."</td>
            <td>".$row['Gender']."</td>  
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