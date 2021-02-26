<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

require_once("navbar.php");
include("connectionproject.php");
?>
<html lang="en"><head>
<style>

body {
  background-image: url('https://static.onecms.io/wp-content/uploads/sites/34/2020/08/04/woman-hiking-mountain-getty-0720.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}

form-group{
  padding: 2px;
}
input[type="text"]{
  margin-top:75%;
  margin-left:95%;
}
input[type="submit"]{
  margin-top:-65px;
  margin-left:900px;
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">


<div class="row">
            <div class="form-group col-lg-4 ">
               <form method="POST">
                <input type="text" name="name" class="form-control input-normal" placeholder="Search by Country, City or Place" />
                <input type="submit" class="btn btn-dark" name="search" value="Search">
                </form>
            </div>
        </div>
  
   
    <?php
  $o=" ";
    if(isset($_POST['search']))
{
	$o=$_POST['name'];
 
	$sql = "SELECT * FROM groups WHERE place = '$o' or country = '$o' or city = '$o'";
    // $_SESSION['place']=$_POST['name'];
    // $_SESSION['country']=$_POST['name'];
    // $_SESSION['city']=$_POST['name'];
	$result = mysqli_query($conn, $sql);
 
  

}
echo "<a href='searchgroups.php?idd={$o}' class='btn btn-primary'>Search</a>";

?>

</body></html>