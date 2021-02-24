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
    function Remove(){
      jQuery.ajax({
        url:"deletehicker.php",
        data:{ rh : $("#rh").val() },
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

<form action="deletehicker.php" method="POST">
  <div class="form-group">
    <label class="font-weight-bold">Enter Data To Remove Hicker From Group</label>
    <input type="text" name="rh" id="rh" class="form-control" onkeyup="Remove()">
    <div id="output"></div>
  </div>

</form>

</body>

</html>

