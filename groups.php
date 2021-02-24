<?php
session_start();
require_once("navbar.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
      .rating {
        display:flex;
      }
      .rating .star{
        width:20px;
        height:20px;
        margin:0 2px;
        background-image:url('layout/svg/star.svg');
        background-repeat:no-repeat;
        background-size:contain;
        background-position:center;
      }
      .rating .star.nostar{
        background-image:url('layout/svg/nostar.svg');
      }
    </style>
  </head>
<body>
<?php
include("connectionproject.php");
$t=$_SESSION['t'];
echo $t;


$sql = "SELECT g.*,AVG(r.stars) as stars FROM groups g LEFT JOIN rating r on g.id=r.group_id GROUP BY g.id";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result)) {
  
   echo" <div class='card' style='width: 18rem;'>";
    echo " <img class='card-img-top' src='".$row['photo']."' alt='Card image cap'>";
  echo"<div class='card-body'>";
    echo"<h5 class='card-title'>{$row['place']}</h5>";
    echo"<h6 class='card-text'>{$row['country']}</h6>";
    echo "<div class='rating' data-rating='".$row["stars"]."'></div>";
    echo "<a href='http://localhost/WebProject-main/grp.php?id={$row['id']}' class='btn btn-primary'>Group Details</a>";
    echo "<a href='./rate-group.php?id={$row['id']}' class='btn btn-primary'>Rate Group</a>";
   if($t=="admin")
   {
    echo "<a href='http://localhost/WebProject-main/editgroups.php?id={$row['id']}' class='btn btn-secondary'>Edit</a>";
    echo "<a href='http://localhost/WebProject-main/deletegroups.php?id={$row['id']}' class='btn btn-danger'>Delete</a>";

   }
  echo "</div>";
 echo"</div>";   
}
}
?>
<script>

function createRatingStars(element){

element.innerHTML = "";
var rating_count = element.getAttribute('data-rating');
// * check if the .rating element has a 'data-rating' attribute or no
// * if yes, get the value of it, else then = 5
rating_count = rating_count?rating_count:0;
rating_count = parseInt(rating_count);
var stars = new Array(5);
// *for the data-rating's count create full stars
for (let j = 0; j < rating_count; j++) {
    var star = document.createElement('div');
    star.classList.add('star');
    stars[j] = star;
    
}
// *for the rest of 5 stars (which is { 5 - rating_count } ) create an empty star
for (let j = rating_count; j < 5; j++ ){
    var star = document.createElement('div');
    star.classList.add('star');
    star.classList.add('nostar');
    stars[j] = star;
}
// TODO: If the rating is a fraction, draw half star
for (let j = 0; j < 5; j++) {
    element.appendChild(stars[j]);
}

//
if(element.classList.contains('user-rating')){
    const input = document.createElement('input');
    input.setAttribute('type','text');
    input.setAttribute('name','rating');
    input.setAttribute('required','true');
    input.value = rating_count==0?"":rating_count;
    element.appendChild(input);
    const element_star = element.querySelectorAll('.star');
    for(let j = 0; j < element_star.length;j++){
        console.log(element_star[j]);
        element_star[j].addEventListener('click',function(){
            this.parentNode.setAttribute('data-rating',j+1);
            createRatingStars(this.parentNode);
        });
    }
}
}
const ratings = document.querySelectorAll('.rating');
for (let i = 0; i < ratings.length; i++) {
const element = ratings[i];
createRatingStars(element);
}
</script>
</body>
</html>