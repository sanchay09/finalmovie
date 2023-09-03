<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theaters</title>


<style>
      
      body{
    background: url('images/background.jpg');
    }

    .navigationofmovies{
    display: flex;
    width: 96.4%;
    
     height: 70px;
       background: #333545;
       
      margin-top: -10px;
       padding :5px 30px;
       margin-left: -6px;
       justify-content: space-between;
       opacity:0.9;
     border-bottom: 8px solid #222;;
       
       
    }
    
    #title1{
    
    display: flex;
    font-size: 34px;
    padding :27px 0px;
    color: white;

    
    }

    #title1 img{
    width: 50px;
    height: 50px;
}
#content1 p{
         
         font-size:2.1rem;
         color: white;
  }

     .fullcontainer{
        
        display:grid;
        grid-template-columns: 2.5fr 4fr;
        margin-right: 5px;
         margin-top: 25px;
     }

    .theartercontainer{
         border-radius: 10px;
         height: 100%;
         display: flex;
         flex-direction: column;
         background-color: #333;
         opacity:0.85;
    }

    .moviecontainer1{
        border-radius: 10px;
        height: 98%;
        padding: 10px 10px;
        display: flex;
        flex-direction: column;
         background-color: #333;
         opacity:0.85;
        
    }

     .movieinfo1{
           height: 450px;
           background-color:black;
           
           
           border-radius: 10px;
           text-align: center;
           font-size: 1.8rem;
           text-decoration: none;
           color:white;
     }

     .movieinfo2{
        display: flex;
        background-color:black;
       
        flex-direction: column;
           height: 400px;
           color:white;
           border-radius: 10px;
           margin-top: 15px;
           font-size: 1.5rem;
           
     }
     .tickbut{
          
        
          margin-top: 30px;
          
          align-self: center;
          align-self: center;
     }

    .theaters{
        display: flex;
          background-color:black;
          
          border-radius: 10px;
          height: 80px;
          padding: 10px 10px;
          margin:5px;
          justify-content: space-between;
          color:white;
        
    }

   .lang{
                background-color:#fff;
                color:rgb(231, 130, 130);
                border:1px solid rgb(231, 130, 130);
                padding:4px 10px 4px 10px;
                border-radius:3px;
       }
       .format{
        
        background-color:#fff;
                color:rgb(231, 130, 130);
                border:1px solid rgb(231, 130, 130);
                padding:4px 10px 4px 10px;
                border-radius:3px;
       }
      .buttons{
        display: flex;

      }

  #but1{
          align-self: flex-end;
          margin-right: 20px;
  }
  .lang:hover{
             background-color: #2dc492;
  }
  #but2{
          align-self: flex-end;
  }
  .format:hover{
             background-color: #2dc492;
  }
.theaterslist{
     font-size: 1.6rem;
     text-decoration: none;
     color:white;

}
.theaterslist:hover{
     font-size: 1.6rem;
     text-decoration: none;
     color:rgb(231, 130, 130);

}

.nameofmovies1{
    text-decoration: none;
    color: white;
}

.movieinfo2 h2{ 
    margin-top: 3px;
    text-align: center;

}
.movieinfo2 p {
    margin:10px;
    font-size: 1.7rem;
}
.castimg{
    display: flex;
    margin :5px;
}
.castimg img{
    width: 150px;
    height: 150px;
    margin-right: 20px;
    border-radius: 50%;
}
#tickbut{
     width: 230px;
     height: 55px;
     background-color: rgb(248, 68, 100);
    border-radius: 10px;
    border: rgb(248, 68, 100);
}


</style>






</head>
<body>


    <nav class="navigationofmovies">
        <div id="content1"><p>Select Theaters</p></div>
        
        <div id="title1">
            <div>Ticket</div>
            <img src="images/logo.ico">
            <div>Flick</div>
    </div>
    
    </nav>



    <div class="fullcontainer">
   <div class="moviecontainer1">
    
    <?php
      include '_dbconnect.php';
      $cid=$_GET['cityid'];
      $mid=$_GET['movieid'];
      $sql="SELECT * FROM `movies` Where `city_id`='$cid' and `movie_id`='$mid'";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
      $movieid=$row['movie_id'];
      $moviename=$row['movie_name'];
      $movieimg=$row['movie_img'];
      $actor=$row['movie_hero'];
      $actress=$row['movie_heroin'];
      $dir=$row['movie_director'];
     echo' 
      <div class="movieinfo1">
      <a href="#" class="moviesLinkList1"><img src="img/'.$movieimg.'" width="100%" height="400px"></a>
            <div> <a href="#" class="nameofmovies1">'.$moviename.'</a></div>
     </div>';
        
    echo'
     <div class="movieinfo2">
        
     <div><h2>'.$moviename.'</h2></div>     
     <div><p>Cast:'.$actor.' ,'.$actress.' </p></div>
     <div> <p>Director: '.$dir.' </p></div>
     <div><p>Language:Hindi,Tamil</p></div>
     <div class="castimg">
      <img src="images/dhanush.jpg" >
      
      <img src="images/sonam.jpg">
     
      </div>

      
  </div>';
  


      }
      ?>
   <!-- <div class="movieinfo1">
    <a href="#" class="moviesLinkList1"><img src="images/ranjana.jpg" width="100%" height="400px"></a>
          <div> <a href="#" class="nameofmovies1">Raanjhana</a></div>
   </div> -->
      
<!-- 
      <div class="movieinfo2">
        
       <div><h2>Raanjhana</h2></div>     
       <div><p>Cast:  Dhanush,Sonam </p></div>
       <div> <p>Director:  Anand L Rai </p></div>
       <div><p>Language:  Hindi,Tamil</p></div>
       <div class="castimg">
        <img src="images/dhanush.jpg" >
        
        <img src="images/sonam.jpg">
       
        </div>

        
    </div> -->
    
    <div class="tickbut">
        <button id="tickbut"><span style="font-weight: 500;
            font-size: 20px;
            color: rgb(255, 255, 255)">Book Tickets</span></button>
    </div>

    </div>

    <div class="theartercontainer">
   <?php
        
        include '_dbconnect.php';
        $cid=$_GET['cityid'];
        $mid=$_GET['movieid'];
        $sql="SELECT * FROM `theatres1` Where `city_id`='$cid' and `movie_id`='$mid'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
        $tid=$row['t_id'];
        $ttype=$row['t_type'];
        $tname=$row['t_name'];
        $tadd=$row['t_address'];
       echo'
        <div class="theaters"> <a href="seatbooking.php?tid='.$tid.'&movieid='.$mid.'&cityid='.$cid.'" target="_blank" class="theaterslist">'.$ttype.' '.$tname.' ,'.$tadd.'</a>
        <div class="buttons">
       <div id="but1"> <button class="lang"><a href="Selectseats.php" target="_blank" style="text-decoration: none; color:rgb(231, 130, 130);" >Hindi</button> </a></div>
       <div id="but2"><button class="format"><a href="Selectseats.php" target="_blank"style="text-decoration: none; color:rgb(231, 130, 130);">2D</button> </a></div>
          </div>
        </div>';


        }

   ?>
   </div>

 <!-- <div class="theartercontainer">
    <div class="theaters"> <a href="Selectseats.php" target="_blank" class="theaterslist">PVR: 4DX, Orion Mall, Dr Rajkumar Road</a>
        <div class="buttons">
       <div id="but1"> <button class="lang"><a href="Selectseats.php" target="_blank" style="text-decoration: none; color:rgb(231, 130, 130);" >Hindi</button> </a></div>
       <div id="but2"><button class="format"><a href="Selectseats.php" target="_blank"style="text-decoration: none; color:rgb(231, 130, 130);">2D</button> </a></div>
          </div>
        </div>
         
     <div class="theaters"> <a href="#" class="theaterslist">PVR: 4DX, Nexus (Formerly Forum), Koramangala</a>
            <div class="buttons">
           <div id="but1"> <button class="lang">Hindi</button></div>
           <div id="but2"><button class="format">2D</button> </div>
              </div>
            </div>
    <div class="theaters"> <a href="#" class="theaterslist">
        PVR: 4DX, Phoenix Marketcity Mall, Whitefield Road</a>
                <div class="buttons">
               <div id="but1"> <button class="lang">Hindi</button> </div>
               <div id="but2"><button class="format">2D</button> </div>
                  </div>
                </div>
     <div class="theaters"> <a href="#" class="theaterslist">PVR: 4DX, Vega City, Bannerghatta Road, Bengaluru</a>
                    <div class="buttons">
                   <div id="but1"> <button class="lang">Hindi</button> </div>
                   <div id="but2"><button class="format">2D</button> </div>
                      </div>
                    </div>
     <div class="theaters"> <a href="#" class="theaterslist">INOX: Korum Mall, Eastern Express Highway, Thane</a>
                        <div class="buttons">
                       <div id="but1"> <button class="lang">Hindi</button> </div>
                       <div id="but2"><button class="format">2D</button> </div>
                          </div>
                        </div>
    <div class="theaters"> <a href="#" class="theaterslist">INOX: Brookefield Mall</a>
                            <div class="buttons">
                           <div id="but1"> <button class="lang">Hindi</button> </div>
                           <div id="but2"><button class="format">2D</button> </div>
                              </div>
                            </div>
     <div class="theaters"> <a href="#" class="theaterslist">INOX: Galleria Mall, Yelahanka</a>
                                <div class="buttons">
                               <div id="but1"> <button class="lang">Hindi</button> </div>
                               <div id="but2"><button class="format">2D</button> </div>
                                  </div>
                                </div>
     <div class="theaters"> <a href="#" class="theaterslist">INOX: Garuda Swagath Mall, Jayanagar</a>
                                    <div class="buttons">
                                   <div id="but1"> <button class="lang">Hindi</button> </div>
                                   <div id="but2"><button class="format">2D</button> </div>
                                      </div>
                                    </div>

                                    <div class="theaters"> <a href="#" class="theaterslist">
                                        INOX: Central, JP Nagar, Mantri Junction</a>
                                        <div class="buttons">
                                       <div id="but1"> <button class="lang">Hindi</button> </div>
                                       <div id="but2"><button class="format">2D</button> </div>
                                          </div>
                                        </div>


</div> -->

</body>
</html>