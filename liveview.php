<?php
require_once "adminnav.php";
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$db = "webproject (2)";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.m
in.js"></script>
<script>
    function View(){
      jQuery.ajax({
        url:"view.php",
        data:'view='+$("#view").val(),
        type:"POST",
        success:function(data){
          $("#output").html(data);
        }
      });
    }
  </script>
    <style>
        label{
            color:blue;
            font-weight:bold;
            font-family:sans-serif;
            font-size: 30px;
        }
    </style>
</head>
<body>

<form action="view.php?view=<?php echo $_POST['view']; ?>" method="POST">
  <div class="form-group">
    <label class="font-weight-bold">Enter Data To View users</label>
    <input type="text" name="view" id="view" class="form-control" onkeyup="View()">
    <div id="output"></div>
  </div>

</form>

</body>

</html>

