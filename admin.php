<?php
	include"adminnav.php";
	session_start()
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <style type="text/css">
     	h1{
     		color:blue;
			 font-family: italic;
			 font-weight:bold;
		 }
		 h2{
			color:red;
     		font-family: italic;
		 }
		 h3{
			color:purple;
     		font-family: italic;
		 }
		.rate_link{
			font-size:40px;
			font-family: Arial;
			text-decoration:none;
		}
		.rate_link:hover{
			color:yellow;
		}

     	body{
     		background-color: #A7A1A1;
     	}
     </style>
    <title>Admin LogIn</title>
    <style type="text/css">
    	.circular {
			  position: relative;
			  width: 50px;
			  height: 50px;
			  overflow: hidden;
			  border-radius: 50%;
		}

		.circular img {
		  width: 100%;
		  height: auto;
		}

    </style>
  </head>
  <body>

    <div class="container my-4 text-center">
    	<?php
			
    		$dbServername="localhost";
			$dbUsername="root";
			$dbpassword="";
			$db = "webproject (2)";

			$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$db);
			if(!isset($_POST['signin']))
			{
   				$select="SELECT * FROM data WHERE id = " .$_SESSION['id'];
				$result = mysqli_query($conn,"SELECT * FROM data WHERE id = " .$_SESSION['id']);


				while($row = $result -> fetch_array(MYSQLI_ASSOC))
				{
					?>
					<img src="photos/<?php echo $row['Photo_Name']; ?>" class="rounded-circle" width="200" height="200" >
						
						<?php
					echo "<br>";	
					$_SESSION['e']= $row['Email'];
					$_SESSION['fname'] = $row['First_Name'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['l'] = $row['Last_Name'];
					echo"<h1>Admin ID: ".$_SESSION['id']."</h1>";
					echo "<br>";
					echo"<h2>First_Name:".$_SESSION['fname']."</h2>";
					echo "<br>";
					echo"<h3>Last_Name: ". $_SESSION['l']."</h3>";
					echo "<br>";
					echo"<h4>Email: ". $_SESSION['e']."</h4>";
					
					 } ?>
		    	
		    
			<?php } ?>


    	<a href="raing.php" class="rate_link">Rate</a>
     




  </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>





