<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
    	body{
     
      background-size: cover;
      height: 100%;
	  background-image: url('mm.jpg');

    }
    </style>
    <title>Login</title>
  </head>
  <body class="text-center">
<div style="margin-top: 150px;">
	<form form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate style="width: 100%; max-width: 330px; padding: 40px;margin: auto;">
		  <h1 style="margin-bottom: 10px;">Please SignIn</h1>
		  <br>
		    <div class="col-md-6 mb-3">
		      <input type="text" name="email" placeholder="Email" required>
		      <div class="valid-tooltip">
		        Looks good!
		      </div>
		    </div>
		    <div class="col-md-6 mb-3">
		     <input type="Password" name="pass" placeholder="Password" required>
		      <div class="valid-tooltip">
		        Looks good!
		      </div>
		    </div>
		  	<button class="btn btn-primary" type="submit" name="signin">SignIn</button>
		  	<br>
		  	
    </form>
</div>
       <?php
       session_start();
    $dbServername="localhost";
	$dbUsername="root";
	$dbpassword="";
	$db = "webproject (2)";

	
   		if(isset($_POST['signin']) && !empty($_POST['email']) && !empty($_POST['pass']) )
   		{
			$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$db);
			$_SESSION['e']=$_POST['email'];
			$_SESSION['p']=$_POST['pass'];
			$e=$_SESSION['e'];
			$p=$_SESSION['p'];
   			
			$result=mysqli_query($conn,"SELECT * FROM data WHERE Email= '$e' AND Password= '$p'" );

					while($row = mysqli_fetch_array($result)) {  
						
						echo $e;
						echo $p;
						echo"found!!!!";           
						$_SESSION['id'] = $row['id'];
						$_SESSION['f'] = $row['First_Name'];
						$_SESSION['e']= $row['Email'];
						$_SESSION['g'] = $row['Gender'];
						$_SESSION['t'] = $row['type'];
						$t=$_SESSION['t'];
							if($t=="user")
							{
								//echo '<script>alert(" Welcome User!")</script>';
								//echo '<script>window.location="signup.php"</script>';
								header('Location: HomePage.php');

							
							}
							else if($t=="admin")
							{
								header('Location: HomePage.php');
							}
							else if($t=="auditor")
							{ 
								header('Location: HomePage.php');
							}
						}
				


		}


	
		   

		  

        

         ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
