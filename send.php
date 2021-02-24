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

$send=$_POST['send'];
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['sendm']) {
    # code...
    $sql="SELECT id FROM data WHERE type='admin'";

if($result = mysqli_query($conn,$sql))
{
    echo"<h6>". "Succeffully result!!!". "</h6>";
    if(mysqli_num_rows($result)>0){
        echo"<h6>". "Result is >0". "</h6>";
        while($row = mysqli_fetch_array($result)) {  
            $_SESSION['id']=$_POST['id'];
            $id=$_SESSION['id'];           
            $query="INSERT INTO messages (RecieverId,SenderId,Message) VALUES ($sql,$id,$send)";
            echo"<h6>". "Succeffully inserted!!!". "</h6>";
            mysqli_query($conn,$query);
    }

}
else{
    echo"<h6>". "No Matches Found Re-Enter Data Please!!!". "</h6>";
}
}
}



?>