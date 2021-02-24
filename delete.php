<?php
include"adminnav.php";

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
    function Delete(){
      jQuery.ajax({
        url:"Deleteadmin.php",
        data: { ad : $("#ad").val() },
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

<form action="Deleteadmin.php" method="POST">
  <div class="form-group">
    <label class="font-weight-bold">Enter Data To Delete Admin/s</label>
    <input type="text" name="ad" id="ad" class="form-control" onkeyup="Delete()">
    <div id="output"></div>
  </div>

</form>

</body>

</html>

