<?php
session_start();
require_once("navbar.php");

include("connectionproject.php");
$id = $_SESSION['id'];
$sql = "SELECT * FROM data WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  


      
    
  


    
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    


  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="project.css">
    <title>HomePage</title>
  
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    






  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="project.css">
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
           
              
  <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <?php if($row['Photo_Name']==0)
          {
           echo" <img src='https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg' style='vertical-align: middle;
         width: 120px;
         height: 120px;
           border-radius: 50%;'>
          ";
          } 
          else
          {
     echo"<img src='{$row['Photo_Name']}' alt='pp' style='vertical-align: middle;
  width: 120px;
  height: 120px;
  border-radius: 50%;'>
  ";}
  ?>
   <form method="post">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control" name="photo" value="<?php echo $row['Photo_Name']?>;">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
         
          <i class="fa fa-coffee"></i>
          
      
        <h3>Profile info</h3>
       
               
          <div class="form-group">
            <label class="col-lg-3 control-label">First Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="fn" type="text" value="<?php echo $row['First_Name'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="ln" value="<?php echo $row['Last_Name'];?>">
            </div>
          </div>
          <div class="form-group">
           
            <div class="col-lg-8">
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $row['Email'];?>">
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-lg-8">
              <div class="ui-select">
                
                
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Enter Old Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="oldpass" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">New Password:</label>
            <div class="col-md-8">
              <input name="newpass" class="form-control" type="password" value="<?php echo $row['Password'];?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
  
<hr>
<?php
if(isset($_POST["save"]))
{

  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $email=$_POST['email'];
  $oldpass=$_POST['oldpass'];
  $photo=$_POST['photo'];
  $newpass = $_POST['newpass'];

if($oldpass == $row['Password'])
{
  
  $sql1 ="UPDATE data SET First_Name = '$fn', Last_Name = '$ln' , Email = '$email', Password = '$newpass', Photo_Name = '$photo' WHERE id ='$id'";
  
  $result1=mysqli_query($conn,$sql1);
  if(mysqli_affected_rows($conn) >0 )
  {
    echo"Updated";
  }
    
    

}
else
{
echo"Wrong Old Password";
}
}
 

  
  // Create connection
// $conn = new mysqli($servername, $username, $password,$db);

// // Check connection

//  $sql1 ="UPDATE data First_Name = '$fn', Last_Name = '$ln' , Email = '$email', Password = '$newpass', Photo_Name = '$photo'";
//  $result1 = mysqli_query($conn,$sql1);

// if(mysqli_query($conn,$sql))
// {
//     echo"Group Submitted";
    
 

       ?>
</body>
</html>