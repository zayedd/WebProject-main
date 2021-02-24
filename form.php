
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
   
<title>update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="layout/css/profile.css">
	 <link rel="stylesheet" href="layout/css/nav-bar.css">
	 	 <link rel="stylesheet" href="layout/css/footer.css">
		  	<style>


<style>
    .slider {
        width: 100%;
    }
	
	.header{
    background: none;
  background-color:black;
  margin-left: 50px;
}

.container emp-profile{
 background-color:white;
}
</style>
</head>


<body class="header">


           <div class="overlay">
                <div class="row">
                   <div class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <div class="navlogo col-lg-2">
                                <a class="navbar-brand" href="home.php">HIKERS</a>
                            </div>
                          
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                          
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="col-lg-8">
                                      <ul class="nav navbar-nav nav-links">
                                        
                                        <li><a href="http://localhost/hikers/login/profile.php?prof=0">Profile</a></li>
                                        <li><a href="groups.php">Groups</a></li>
                                        <li><a href="productPage.php">Shop</a></li>
                                        <li><a href="trips.php">Trips</a></li>
                                      </ul>
									  
									   <ul class="nav navbar-nav navbar-right" >
									   
                     <?php
                   
				if(isset($_SESSION['ID'])) 
				{
          echo '  
          
                      <li><a href="login/logout.php"><span class="glyphicon glyphicon-user"></span> Sign out</a></li>
                      <li><a href="myGroups.php"> My Groups</a></li>
                      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                      <li><a href="myTrips.php"> My Trips</a></li>
          ';
         
					
				}
				else
				{
				echo'       
        <li><a href="login/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
				}
				?>
										
										
										
      
                                       
                                    </ul>
                                </div>
                              
                            </div>
                         


  

  
               </div>
                 </div>
                
                
                </div>
        
                
                
                
                
            </div>
<form class="form" action="" method="POST" autocomplete="off" >
<div class="container">

			
<div class="container emp-profile">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="card ">
            <div class="card-header">Personal Info</div>
            <div class="card-block">
                Write your username:
                <br />
                <div class="input-text">
                <input type="text" class="form-control" name="username" autofocus="false">
                </div>
                <br />
                <br />

                Did you like the hiking spots ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio1" autocomplete="off" value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio1" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio1" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio1" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Accomodation ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio2" autocomplete="off" value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio2" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio2" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio2" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Accomodation ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio3" autocomplete="off"  value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio3" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio3" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio3" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Transportations ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio4" autocomplete="off" value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio4" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio4" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio4" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Services ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio5" autocomplete="off" value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio5" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio5" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio5" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Products ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio6" autocomplete="off" value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio6" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio6" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio6" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Materials used ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio7" autocomplete="off" value="NO" />No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio7" autocomplete="off" value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio7" autocomplete="off" value="Nice" />Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio7" autocomplete="off" value="perfect" />Perfect
                    </label>
                </div>
                <br />
                <br />

                Did you like the Prices ?
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio8" autocomplete="off" value="NO"/>No
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio8" autocomplete="off"  value="not bad"/>Not Bad
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio8" autocomplete="off" value="Nice"/>Nice
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="radio8" autocomplete="off" value="perfect"/>Perfect
                    </label>
                </div>
                <br />
                <br />

            </div>
        </div>	
				<div class="row">
                    <div class="col-md-20 col-sm-20 col-xs-12">
                        	<div class="input-group-prepend" style="margin-bottom: 25px;">
		 <div class="input-group form-group">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="comment" placeholder="comment" autofocus="false">
						
					</div>
                    </div>
                </div>
				
				   <input type="submit" onsubmit="return false"  name="submit" value="submit" class="login-button">
            </div>
        </div>
    </div>
</div>
</div>
</form>

<?php 
$conn=mysqli_connect("localhost","root","","hikers akheeerr");
$db=mysqli_select_db($conn,'surveytable');

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $radio1 = $_POST ['radio1'];
    $radio2 = $_POST ['radio2'];
    $radio3 = $_POST ['radio3'];
    $radio4 = $_POST ['radio4'];
    $radio5 = $_POST ['radio5'];
    $radio6 = $_POST ['radio6'];
    $radio7 = $_POST ['radio7'];
    $radio8 = $_POST ['radio8'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO surveytable (username,radio1,radio2,radio3,radio4,radio5,radio6,radio7,radio8,comment) VALUES(' $username','$radio1','$radio2','$radio3','$radio4','$radio5','$radio6','$radio7','$radio8','$comment')";
    $sql_run=mysqli_query($conn,$sql);

    if($sql_run)
    {
        echo '<script type="text/javascript"> alert("data saved")</script>';
    }
    else{
        echo '<script type="text/javascript"> alert("data not saved")</script>';
    }

}
?>

<section>
  <footer class="row">
  
<div class="container">
<hr>
    <div class="sozial col-xs-12 col-sm-6 col-sm-push-6">
      <ul class="row">
        <li class="col-xs-6 col-sm-2">
          <a href="#">
            <img class="logo" src="https://i.pinimg.com/originals/b7/63/69/b763699fd1fa3bfb374442593ae642e1.png">
          </a>

        </li>
        
        <li class="col-xs-6 col-sm-2">
          <a href="#">
            <img class="logo" src="https://i.pinimg.com/originals/63/9b/3d/639b3dafb544d6f061fcddd2d6686ddb.png">
          </a>
        </li>
        
      </ul>
    </div>
    
    <div class="copyright col-xs-12 col-sm-3 col-sm-pull-6">
      <p> copyright</p>
    </div>
    
    <div class="impressum col-xs-12 col-sm-3 col-sm-pull-6">
      <p> text</p>
      <p> text </p>
    </div>
	</div>

  </footer>
</section>


</body>
</html>
