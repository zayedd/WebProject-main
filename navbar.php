<?php 
        if($_SESSION['t'] == 'auditor')
{
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
  <title>Document</title>

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
		a:hover{
			background-color:blue;
		}

    </style>
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" >

		  <!-- Links -->
		  <ul class="navbar-nav" style="">
		    <li class="nav-item">
		      <a class="nav-link" href="allMessages.php">Check Messages</a>
			</li>
	
		    </li>
		

		    </li>
		  </ul>

	</nav>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>
<?php 
}
else     if($_SESSION['t'] == 'admin')
{
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
  <title>Document</title>

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
		a:hover{
			background-color:blue;
		}

    </style>
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" >

		  <!-- Links -->
		  <ul class="navbar-nav" style="">
		    <li class="nav-item">
		      <a class="nav-link" href="liveview.php">View All users</a>
			</li>
			<li class="nav-item">
		    	<a class="nav-link" href="HomePage.php">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="addadmin.php">Add Admin</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="delete.php ">Delete Admin</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="addgroups.php">Add Groups</a>
		    </li>
		    
		    <li class="nav-item">
		      <a class="nav-link" href="groups.php">Groups</a>
		    </li>
		    <li class="nav-item">
		    	<a class="nav-link" href="messages.php">View Messages</a>
		    </li>
		   	<li class="nav-item">
		    	<a class="nav-link" href="SearchOrder.php">Search For Order</a>
			</li>
			</li>
		   	<li class="nav-item">
				<a class="nav-link" href="login.php">LogOut</a>

		    </li>
        
		   	<li class="nav-item">
				<a class="nav-link" href="profile.php">Edit Profile</a>

		    </li>
		  </ul>

	</nav>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>

<?php
}
else {
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="HomePage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ConactUs</a>
      </li>
      <li class="nav-item">
      </li>
      <?php
      if(!empty($_SESSION))
      {
      ?>
      <li class="nav-item">
      </li>
        <?php
        
?>      

      <li class="nav-item">
      <a href="groups.php" class="nav-link">Groups 
      </li>
      <a href="usercarts.php" class="nav-link">Cart</a>
    <li class="nav-item">
    </li>
    <li class="nav-item">
		    	<a class="nav-link" href="messages.php">View Messages</a>
		    </li>
        <li class="nav-item">
				<a class="nav-link" href="profile.php">Edit Profile</a>

		    </li>
      <?php 
      }
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(!empty($_SESSION))
      {

      
        ?>
        <p class="my-3 my-sm-0 mx-4"><?php echo "Welcome ". $_SESSION['f']?></p>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <a href="http://localhost/WebProject-main/login.php">Logout</a> </button>

        <?php
     }
    
      else{
      ?>

      <form action="login.php" method="POST">

        <button class="btn btn-outline-success my-2 my-sm-0"  > <a href="http://localhost/WebProject-main/login.php">Login</a> </button>
        <?php }}?>
      </form>
    </form>
  </div>
</nav>
