<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include'_dbconnect.php';?>

<div class="container my-3">
      <h1> Search Resutls for <?php echo $_GET['search']?></h1>
        
  <?php


$query=$_GET["search"];
$sql="SELECT * FROM `movies` where match(movie_name) against('$query')";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
   $title=$row['movie_name'];
  
//    $thread_id=$row['movie_id'];
//    $url="Theathers.php?threadid=".$thread_id;
  

   echo'

   <div class="result">
    <h3>'.$title.'</h3>
   
   </div>
';
   
}
}

?>

</div>


</body>
</html>





