
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>
  

  body{
    background: url('images/background.jpg');
    }


  .navigationofmovies{
    display: flex;
    width: 101%;
    background: #333545;
    margin-top: -7px;
    margin-left:-7px;
     
       
    }
    
    #title1{
    
    display: flex;
    font-size: 1.8rem;
    
    color: white;
    margin-top:40px;
    margin-left:10px;

  

    
    }

    #title1 img{
    width: 50px;
    height: 45px;
   
}
     .moviescontainer1{
        display: flex;
        flex-direction:column;
        width: 100%;
        height: 100%;
        padding-top: 10px;
        justify-content: space-around;
        align-items:center;
        margin-top: 10px;
        text-align: center;
        border-radius: 10px;
        font-size: 1.6rem;
        background-color: black;
        opacity:0.9;
        
     }
      
     
     .moviescontainer2{
        display: flex;
        
        width: 100%;
        height: 290px;
        padding-top: 10px;
        justify-content: space-around;
        margin-top: 10px;
        text-align: center;
        border-radius: 10px;
        font-size: 1.6rem;
        background-color: black;
        opacity:0.9;
     }
      
      
     #item2{
       
        width: 250px;
        height: 270px;
        border-radius: 6px;
        
          
     }
     .citiesLinkList img{
                width: 250px;
     
    }
    
   

    #content1 p{
          font-size:2.4rem;
          color: white;
          margin-top:35px;
   }
     
      .nameofmovies{
        text-decoration: none;
        color :white;
      }
      .nameofmovies:hover{
        text-decoration: underline;
        color :rgb(245, 88, 88);
      }
      
     
#detail  {

font-size:1.8rem; 
  
 margin-top:12px;
 margin-right:5px;
 color:white;
}

.space1{
  height: 100%;
  min-width: 350px;
}
.space2{
  height: 100%;
  min-width: 450px;
}


#detail1 img {
 
 width: 90px;
 height: 70px;
 border-radius: 50%;


}

#detail1{
  margin-top:23px;
}
 




   </style>
</head>
<body>
    <nav class="navigationofmovies">
      <div id="title1">
          <div>Ticket</div>
          <img src="images/logo.ico">
          <div>Flick</div>
  </div>
  <div class="space1"></div>

        <div id="content1"><p>Movies </p></div>
        


    
    <div class="space2">

</div>


  <div id="detail">
  <p><?php  echo $_SESSION['username']?></p>
 
  </div>

  <div id="detail1">
  <img src="images/male.jpg">
 
</div>

</nav>

<div class="moviescontainer1">
<?php
include '_dbconnect.php';
$id=$_GET['cityid'];
$sql="SELECT * FROM `movies` Where `city_id`='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  $movieid=$row['movie_id'];
$moviename=$row['movie_name'];
$movieimg=$row['movie_img'];
echo'
<div id="item2">
<a href="Theathers.php?movieid='.$movieid.'&cityid='.$id.'" class="moviesLinkList" target="_blank"><img src="img/'.$movieimg.'" width="100%" height="240px"></a>
<div> <a href="Theathers.php?movieid='.$movieid.'&cityid='.$id.'" class="nameofmovies">'.$moviename.'</a></div>
</div>
<br>';

}
?>

</div>




     <!-- <div class="moviescontainer1">
      
        <div id="item2">
          <a href="Theathers.php" class="moviesLinkList" target="_blank"><img src="images/ranjana.jpg" width="100%" height="240px"></a>
          <div> <a href="Theathers.php" class="nameofmovies">Raanjhana</a></div>
        </div>
  
        <div id="item2">
            <a href="#" class="moviesLinkList"><img src="images/halfgf.jpg" width="100%" height="240px"></a>
            <div> <a href="#" class="nameofmovies">Half GirlFriend</a></div>
          </div>

          <div id="item2">
            <a href="#" class="moviesLinkList"><img src="images/Atrangi_Re_film_poster.jpg" width="100%" height="240px"></a>
            <div> <a href="#" class="nameofmovies">Atrangi Re</a></div>
          </div>

          <div id="item2">
            <a href="#" class="moviesLinkList"><img src="images/the notebook.jpg" width="100%" height="240px"></a>
            <div> <a href="#" class="nameofmovies">The Notebook</a></div>
          </div>

          <div id="item2">
            <a href="#" class="moviesLinkList"><img src="images/love,rosie.jpg" width="100%" height="240px"></a>
            <div> <a href="#" class="nameofmovies">Love,Rosie</a></div>
          </div>
          
        </div>
        <div class="moviescontainer2">
      
            <div id="item2">
              <a href="#" class="moviesLinkList"><img src="images/About_Time_(2013_film)_Poster.jpg" width="100%" height="240px"></a>
              <div> <a href="#" class="nameofmovies">About Time</a></div>
            </div>
      
            <div id="item2">
                <a href="#" class="moviesLinkList"><img src="images/before.jpg" width="100%" height="240px"></a>
                <div> <a href="#" class="nameofmovies">Before Sunrise</a></div>
              </div>
    
              <div id="item2">
                <a href="#" class="moviesLinkList"><img src="images/tess.jpg" width="100%" height="240px"></a>
                <div> <a href="#" class="nameofmovies">Tess</a></div>
              </div>
    
              <div id="item2">
                <a href="#" class="moviesLinkList"><img src="images/mebeforeyou.jpg" width="100%" height="240px"></a>
                <div> <a href="#" class="nameofmovies">Me Before You </a></div>
              </div>
    
              <div id="item2">
                <a href="#" class="moviesLinkList"><img src="images/rosemary.jpg" width="100%" height="240px"></a>
                <div> <a href="#" class="nameofmovies">Rosemary's Baby</a></div>
              </div>
              
            
            </div>
            --> 

</body>
</html>