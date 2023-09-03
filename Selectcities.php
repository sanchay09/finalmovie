<?php
include '_dbconnect.php';
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
    <title>Select Cities</title>


 <style>
   
   
   body{
    background:url(images/background.jpg)
    }
    .navigationofcities{
      display: flex;
      width: 96.4%;
       height: 90px;
       background: #333545;
      
       margin-top: -32px;
       padding :5px 30px;
       margin-left: -6px;
     
    }
   
    
    .container1{
      display: flex;
      justify-content: center;
      justify-content: space-around;
      margin-top: 20px;
      text-align: center;
      font-size: 2rem;
      text-decoration: none;
    }
    
   .container2{
    display: flex;
    justify-content: center;
    justify-content: space-around;
    margin-top: 20px;
    text-align: center;
    font-size: 2rem;
    text-decoration: none;
   }

   .container3{
    display: flex;
    justify-content: center;
    justify-content: space-around;
    margin-top: 20px;
    text-align: center;
    font-size: 2rem;
    text-decoration: none;
   }
   
   #content p{
          font-size:2.3rem;
          color: white;
          margin-top:35px;
   }
     
   #title2{
    
    display: flex;
    font-size: 1.8rem;
    padding :27px 0px;
    color: white;
    margin-top:10px;
    }

    #title2 img{
    width: 50px;
    height: 50px;
   
}
   #item1
   {
     width: 550px;
     height: 400px;
     border: 6px solid rgb(245, 88, 88);
     border-radius: 10px;
     background-color:rgb(248, 239, 156);
   }

    
    
  .citiesLinkList img
  {
                width: 550px;
                height: 350px;
  }
   
.nameofcitiesLinkList
{
  text-decoration: none;
   color :rgb(51, 33, 33);
}

.nameofcitiesLinkList:hover
{
  text-decoration: underline;
   color :rgb(255, 149, 149);
}



#detail  
{
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
    min-width: 350px;
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

  <nav class="navigationofcities">

    <div id="title2">
      <div>Ticket</div>
      <img src="images/logo.ico">
      <div>Flick</div>
</div> 
<div class="space1"></div>


      <div id="content"><p>Select Cities</p></div>


      <div class="space2">

  </div>


    <div id="detail">
    <p><?php  echo $_SESSION['username']?></p>
   
    </div>

    <div id="detail1">
    <img src="images/male.jpg">
   
</div>


  </nav>
    
  
    <?php
       
    
     $sql="SELECT * FROM `cities`"; 

      
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result)){
        $cityid=$row['city_no'];
        $cityname=$row['city_name'];
        $cityimg=$row['city_img'];
      
     
       
       echo'
        <div class="container1">
       <div id="item1" >
       <a href="Movieslist.php?cityid='.$cityid.'" class="citiesLinkList" target="_blank"><img src="img/'.$cityimg.'" width="100%"></a>
       <div> <a href="Movieslist.php?cityid='.$cityid.'" class="nameofcitiesLinkList" target="_blank">'.$cityname.'</a></div>
      </div>
         </div>
       '; 
       


       
     }






     ?>

   


</body>
</html>