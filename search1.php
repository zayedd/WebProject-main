<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" >
		<label>Name To Search</label>
		<input type="text" name="name">
		<button name="search">Search</button>
	</form>
</body>
</html>
<?php
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$db = "webproject (2)";


$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$db);
	
if(isset($_POST['search']))
{
	$o=$_POST['name'];
	$sql = "SELECT * FROM groups WHERE place = '$o' or country = '$o' or city = '$o'";
    // $_SESSION['place']=$_POST['name'];
    // $_SESSION['country']=$_POST['name'];
    // $_SESSION['city']=$_POST['name'];
	$result = mysqli_query($conn, $sql);
			if (empty($o))
			{
				echo '<script>alert(" Empty Order !")</script>';
			
			}
			else{
    
					     if($result)
					     {
					         if(mySqli_num_rows($result))
					         {
					         	
					             while($row = mysqli_fetch_array($result))
					             {
					                    // echo "User " . $row["place"]." is Found";
                                        //  echo $_SESSION['place'];
                                         // printf("<td><a href = groups.php?idd=,$o");
                                        //  $row['place'],$row['city'] , $row['country']);
                                          header('Location:searchgroups.php?idd='.$o);

                                        

					             }

					         }
					         else
					         {
					                 echo "no data for this id";
					         }

					     }
					     else
					     {
					             echo "result error";
					     }
				}
}
mysqli_close($conn);
?>