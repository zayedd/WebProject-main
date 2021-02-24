
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
    	form{
    		margin: auto;
    	}
    	body{
      background: url(429028.jpg) no-repeat center center fixed ;
      background-size: cover;
      height: 100%;


    }
    </style>
    <title>SignUp</title>
  </head>
  <body>
  	<?php
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$db = "webproject (2)";

$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$db);


if(isset($_POST['signup']))
{


$_SESSION['f']=$_POST['first'];
$f=$_SESSION['f'];
$_SESSION['l']=$_POST['last'];
$l=$_SESSION['l'];
$_SESSION['e']=$_POST['email'];
$e=$_SESSION['e'];
$_SESSION['p']=$_POST['password'];
$p=$_SESSION['p'];
$_SESSION['g']=$_POST['gender'];
$g=$_SESSION['g'];
$_SESSION['file_name'] = $_FILES['photo']['name'];
$file_name=$_SESSION['file_name'];

$insert="INSERT INTO data (First_Name,Last_Name,Email,Password,Gender,type,Photo_Name) 	
VALUES('$f', '$l','$e','$p','$g','user','$file_name' )"; 

$repeat="SELECT * FROM data WHERE Email='$e'";
$resultemail = mysqli_query( $conn,$repeat );
	if(empty($f))
	{
		echo '<script>alert(" Empty First Name !")</script>';
	}
		if (empty($l))
		{
			echo '<script>alert(" Empty Last Name !")</script>';
		}
	    if (empty($e))
			{
				echo '<script>alert(" Empty Email !")</script>';
			}
		if (empty($p))
			{
					echo '<script>alert(" Empty Password !")</script>';
			}
			
		
	
	 if(!filter_var($e,FILTER_VALIDATE_EMAIL))
	{
		echo '<script>alert(" Invalid E-Mail !")</script>';
	}
	 if(!preg_match("/^[a-zA-Z]*$/", $f)||!preg_match("/^[a-zA-Z]*$/", $l))
	{
		echo '<script>alert(" Invalid Characters !")</script>';
	}
	/*else if(!isset($_POST['photo']))
	{
		echo '<script>alert(" Please Upload Profile Image !")</script>';
	}*/
	 if(!isset($_POST['gender']))
	{
		echo '<script>alert(" Empty Gender !")</script>';
	}
	//email checking
       if( mysqli_fetch_assoc($resultemail) > 0 )
       {	
   		  die( "There is already a user with that email!" ) ;
   		  die(mysql_error());
       }

	//files
	if($_FILES['photo']['name']){
			$errors = array();
			
			$file_size = $_FILES['photo']['size'];
			$file_tmp = $_FILES['photo']['tmp_name'];
			$file_type = $_FILES['photo']['type'];
			$slash_position = strpos($file_type, "/") +1;
			$imageFileType = substr($file_type, $slash_position, strlen($file_type) - $slash_position);

			//echo $imageFileType . "\n";

			
			if($file_size > 2097152){
				$errors[] = "file size must be exactly 2 MB";
			}

			if(empty($errors) == true){
				$destination=move_uploaded_file($file_tmp, "C:/xampp/htdocs/New folder/photos/". $file_name);	
				move_uploaded_file($file_tmp, $destination);
				
				//echo "success";
			}

			if($imageFileType === "jpeg"){

				echo "file is a jpeg :)";
			}

			//mysqli_query($conn,$sql);


		}	
	
	mysqli_query($conn,$insert);


	
   
		
		//header("Location:../New%20folder/admin.php?addadmin=success");
		//echo '<script>window.location="HomePage.php"</script>';
		//$repeat2="SELECT * FROM data WHERE id=22";
		//$resultemail2 = mysqli_query( $conn,$repeat2 );
		echo $f;
	}
	



?>
  		<h1 style="font-style: italic;color: blue; text-align: center;">Please SignUp</h1> 
		<div class="row justify-content-center" style="padding-top:10px;">
			<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
<div class="col-md-6 mb-3">
		      <input type="text" placeholder="FirstName" name="first" required>
		      <div class="valid-tooltip">
		        Looks good!
		      </div>
		    </div>
		    <div class="col-md-6 mb-3">
		     <input type="text" placeholder="LastName" name="last" required>
		      <div class="valid-tooltip">
		        Looks good!
		      </div>
		    </div>
		  
		    <div class="col-md-6 mb-3">
		      <input type="text" placeholder="E-mail" name="email" required>
		      <div class="invalid-tooltip">
		        Please provide a valid Email.
		      </div>
		    </div>
		    <div class="col-md-3 mb-3">
		      <input type="Password" placeholder="Password" name="password" required>
		      <div class="invalid-tooltip">
		        Please Enter a valid Password.
		      </div>
		    </div>
		    <div class="col-md-3 mb-3">
		    	<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" value="Male" name="gender">
						  <label class="form-check-label" for="inlineRadio1">Male</label>
						  <input class="form-check-input" type="radio" value="Female" name="gender">
						  <label class="form-check-label" for="inlineRadio2">Female</label>
				</div>
		    </div>
		    <br>
		    <div class="col-md-3 mb-3">
		    	 <i class="fas fa-camera"></i>
		    	   <input type="file" name="photo">
             </div>		
		  	<br>
		  	<button class="btn btn-primary" type="submit" name="signup" href="http://localhost/New%20folder/egypt.php">SignUp</button>
		    </form>
 		</div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>



