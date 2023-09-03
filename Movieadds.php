<?php
include '_dbconnect.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $actor = $_POST["actor"];
  $actress = $_POST["actress"];
  $dir = $_POST["director"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $sql = "INSERT INTO movies (`movie_name`,`movie_img`,`movie_hero`,`movie_heroin`,`movie_director`,`city_id`,`time`)
       VALUES( '$name', '$newImageName','$actor','$actress','$dir','0',current_timestamp())";
       
      $result=mysqli_query($conn, $sql);
      if($result){
      echo
      "
      <script>
        alert('Successfully Added');
      
      </script>
      ";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie add server</title>
  </head>
  <body>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <label for="actor">Actor: </label>
      <input type="text" name="actor" id = "actor" required value=""> <br>
      <label for="actress">Actress : </label>
      <input type="text" name="actress" id = "actress" required value=""> <br>
      <label for="director">Director: </label>
      <input type="text" name="director" id = "director" required value=""> <br>
      <button type = "submit" name = "submit">Submit</button>
    </form>
    <br>
    
  </body>
</html>
