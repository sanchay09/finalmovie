
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
    <title>Welcome-<?php echo $_SESSION['username']?></title>


<style>
.firstpart{
    
    height: 600px;
}
.firstpart::before{
    content: "";
    position: absolute;
    background: url(images/movieback.jpg);
    top:0px;
    left: 0px;
    z-index: -1;
    opacity: 0.9;
    width: 100%;
    height: 600px;
    

}

.moviescontainer1{
    display: flex;
    text-align: center;
}

#item2{
    margin-right: 30px;
}
.nameofmovies{
        font-size: 2.5rem;
        text-decoration: none;
       color: #e50914;
      }
      .nameofmovies:hover{
        text-decoration: underline;
        color :white;
      }

 .MainHead{
    margin-top: 10px;
    text-align: center;
    font-size: 2.5rem;
    color:#f1bc48;
     font-weight: 100px;
 }
 .navcontainer{
     display:flex;
    justify-content:space-between;
}
 .secondpart{
    display: flex;
    flex-direction: column;
    margin-top: 8px;
    background-color: black;
    justify-content: center;
    align-items: center;
   
 }
 .secondfirst{
    display: flex;
 }

 #titleSecond{
    display: flex;
    font-size: 35px;
    padding:15px 20px;
    margin-left: 50px;

}
#titleSecond img{
    width: 70px;
    height: 60px;
}
#titleSecond div{
    font-size: 2.3rem;
    color:white;
}
.text{
    padding: 17px 330px 38px 0px;
    font-size: 2.3rem;
}
.thirdpart{
    display: flex;
    border-radius: 3px solid red;
    margin-top: 8px;
}
.head{
    display: flex;
    flex-direction: column;
}
.selectcities{
    margin-top: 5px;
}
.selectcitiesbut{
     width: 350px;
     height: 60px;
     background: #e50914;
     border-radius: 30px;
     margin-bottom: 30px;
}

.displayuser{
    display:flex;
   
    margin-top:8px;
    margin-bottom:8px;
    background-image: linear-gradient( to right, #000 40%, transparent 65% ), 
    url("images/ticket21.jpg");
   
    padding: 10px 10px 5px 50px;
    height:250px;
   
}

#detail1 img {
   
  width: 90px;
  height: 70px;
  border-radius: 50%;
 
 
}


#navbar1 {
    display: flex;
    width: 100%;
    height: 70px;
    margin-top: 0px;
    position:static;
    float:none;
   
      
}

#detail  {

  font-size:1.8rem; 
    
   margin-top:-10px;
   margin-right:5px;
 }
 
 .space{
    height: 100%;
    min-width: 450px;
 }


</style>







</head>
<body>






<div class="firstpart">

    
<nav id="navbar1">
    
    <div id="title">
        <div>Ticket</div>
        <img src="images/logo.ico">
        <div>Flick</div>
    </div>
    
    //<div id="search">
   // <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
        <input type="search" name="search" size="30" id="search" action="search.php" placeholder="  Search Movies" ></div>
        
    <div class="space">

     

    </div>


        <div id="detail">
        <p><?php  echo $_SESSION['username']?></p>
       
        </div>

        <div id="detail1">
        <img src="images/male.jpg">
       
    </div>
</nav>


<nav class="navbar2">

    <u1>
        <li class="item"> <a href="#">Home</a></li>
        <li class="item"> <a href="#">Movies</a></li>
        <li class="item"> <a href="Logout.php">Logout</a></li>
        <li class="item"> <a href="#">Contact Us</a></li>
    </u1>
    
    
        
    </nav>


   



   


    <div class="trendingmovies">


        <h2 class="MainHead">Trending Movies</h2>
<marquee onMouseover="stop()" onMouseout="start()" Scrollamount=10>
    <div class="moviescontainer1">


        <div id="item2">
            <a href="Selectcities.php" target="_blank" class="moviesLinkList"><img src="img/barbie.jpg" width="400px" height="340px"></a>
            <div> <a href="Selectcities.php" target="_blank" class="nameofmovies">Barbie</a></div>
          </div>

    <div id="item2">
        <a href="Selectcities.php" target="_blank" class="moviesLinkList"><img src="img/open.jpg" width="400px" height="340px"></a>
        <div> <a href="Selectcities.php" target="_blank" class="nameofmovies">Oppenheimer</a></div>
      </div>

      <div id="item2">
        <a href="Selectcities.php" target="_blank" class="moviesLinkList"><img src="img/past lives.jpg"  width="400px" height="340px"></a>
        <div> <a href="Selectcities.php" target="_blank" class="nameofmovies">Past Lives</a></div>
      </div>
      
   
        <div id="item2">
          <a href="Selectcities.php" target="_blank" class="moviesLinkList"><img src="img/killers.jpg"  width="400px" height="340px"></a>
          <div> <a href="Selectcities.php" target="_blank`" class="nameofmovies">Killers of the flower moon</a></div>
        </div>
  
    </div>
</marquee>
    </div>

 

</div>

<div class="displayuser">

<h1>
 Hi   <?php  echo $_SESSION['username']?>!
 <br>
 Book your Tickets RightNow...
</h1> 

</div>

<div class="secondpart">
    <div class="secondfirst">
    <div class="text">
       Book.. Tickets.. AnyTime.. Anywhere..!
    </div>
    <div id="titleSecond">
        <div>Ticket</div>
        <img src="images/logo.ico">
        <div>Flick</div>
    </div>
    </div>

     <div class="selectcities">
        <button class="selectcitiesbut"><a href="Selectcities.php"  target="_blank" style="text-decoration: none; color: white; font-size: 1.8rem;">Select Cities</a></button>
     </div>

</div>

<link rel="stylesheet" href="style.css" >  
</body>
</html>