<html>


  <!doctype html>
  <body>
<html lang="en">
<!-- Required meta tags -->
<?php
include("connectionproject.php");


$id=$_GET['id'];
$sql = "SELECT * FROM geo_countries";
$result = mysqli_query($conn,$sql);
$sql1 = "SELECT * FROM groups WHERE id='$id'";
$result1 = mysqli_query($conn,$sql1);
$row= mysqli_fetch_array($result);
$row1= mysqli_fetch_array($result1);

?>
   
    

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <div>
  <h2>Edit Groups<h2>
</div>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Place</label>
    <input type="text" class="form-control" id="place" name="place" placeholder="Place" value="<?php echo $row1['place']; ?>">
  </div>
  
  <div class="form-group column-2">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
    <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="dtgroup" value="<?php echo $row1['datetime']; ?>" >
  </div>
 </div>
    Country
    <select class="form-control" id="exampleFormControlSelect1" name="countrygr" value="<?php echo $row1['country']; ?>">
      <?php
      if(mysqli_num_rows($result)>0)
      {
      while($row = mysqli_fetch_array($result)) {
        echo"<option> {$row['name']}</option>";
      
      }

      }
      ?>
     
    </select>
  </div>
  <br>
  <div>
  <form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $row1['city']; ?>">
  </div>
  <div>
  <form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $row1['price']; ?>">
  </div>
  <div>
  Upload Photos For The Place
  <input type="file" class="form-control" id="customFile" name="grphoto" value="<?php echo $row1['photo']; ?>"/>
  </div>
  <br>
  <input type="submit" value="Submit Group" name="submitgroup" id="submitgroup"/>
  <br>
</form>
  <?php
include("connectionproject.php");

if(isset($_POST["submitgroup"]))
{
  $place=$_POST['place'];
  $dtgroup=$_POST['dtgroup'];
  $countrygr=$_POST['countrygr'];
  $citygr=$_POST['city'];
  $pricegr=$_POST['price'];
  $grphoto=$_POST['grphoto'];
  // Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection

$sql ="UPDATE groups SET  (place,datetime,country,city,price,photo) VALUES('$place','$dtgroup','$countrygr','$citygr','$pricegr','$grphoto')";


mysqli_query($conn,$sql);
    echo $sql;
    echo"Group Submitted";
    

}
?>
</body>
</html>