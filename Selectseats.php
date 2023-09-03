<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Seats</title>


<style>

body{
    background: url(images/background.jpg);
    }

.navigationofmovies{
    display: flex;
    
    
     height: 70px;
       background: #333545;
       
      margin-top: -10px;
       padding :5px 30px;
       
       justify-content: space-between;
      
     opacity: 0.9;
       
       
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

.navigationofseats1{
    background-color:#1f2533;
                padding:15px;
                color:#fff;
                opacity: 0.9;

}

.timings{
    background-color:#f3f3f3;
     padding:7px 30px 7px 30px;
       opacity: 0.96;

}


.seatscontainer{
     display: flex;
     margin-top: 30px;
     justify-content: center;
}

.leftseatsheader{
   
    background-color: black;
    opacity:0.9;
    border:   3px solid #2dc492;
    margin-right: 20px;
    width:455px;
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 4px 24px;
    border-radius: 10px;
}

.leftseats{
      display: flex;
      display: flex;
     justify-content: space-around;
 
      
}
.rightseatsheader{
   
    background-color: black;
    opacity:0.9;
    border:   3px solid #2dc492;
    margin-right: 20px;
    width:455px;
    height: 400px;
    display: flex;
   
    flex-direction: column;
    justify-content: space-around;
    padding: 4px 24px;
    border-radius: 10px;
    
}

.rightseats{
      display: flex;
      display: flex;
     justify-content: space-around;
 
      
}

 .seat{
                width: 20px !important;
                height: 20px !important;
                
                border-radius: 26%;
                color: #666;
                padding:5px;
                margin:2px;
                text-align: center;
 }










.timing_select_button{
                background-color:#fff;
                color:#2dc492;
                border:1px solid #2dc492;
                padding:4px 10px 4px 10px;
                border-radius:3px;
       }

        .timing_select_button:hover{
                background-color:#69d8b5;
                cursor: pointer;
        }
     .timing_select_button:active{
                 background-color:#69d8b5;
     }
     .seatbut{
        background-color:#f3f3f3;
                color:#2dc492;
                border:1px solid #2dc492;
                padding:4px 10px 4px 10px;
                border-radius:3px;
        
     }

     .seatbut:hover{
              background-color:rgb(231, 130, 130);
              cursor: pointer;
     }
     .row{
        padding: 10px 2px;
        justify-self: flex-start;
        color:#999;
     }

     #content1 p{
         
         font-size:1.9rem;
         color: white;
  }
  .screen{
    background-color: black;
    opacity:0.9;
  border: 3px solid #2dc492;
  display: flex;
  width: 400px;
  margin: auto;
  margin-top: 20px;
 
  justify-content: center;
  
  border-radius: 5px;
  font-size: 2rem;
  color: white;
}
  .theater{
     font-size: 1.65rem;
  }

</style>











</head>
<body>
    
    <nav class="navigationofmovies">
        <div id="content1"><p>Select Seats</p></div>
        
        <div id="title1">
            <div>Ticket</div>
            <img src="images/logo.ico">
            <div>Flick</div>
    </div>
    
    </nav>


     <nav class="navigationseats">
      
     <div class="navigationofseats1">
        <div class="theater">PVR: 4DX, Orion Mall, Dr Rajkumar Road</div>
        <div class="dates">Today,28 Nov</div>
     </div>

     </nav>
     
     <nav class="timings">
     <div class="timing1">
         
        <button class="timing_select_button">9.00</button> 
        <button class="timing_select_button">1.00</button>
        <button class="timing_select_button">4.00</button>
        <button class="timing_select_button">7.00</button>
        <button class="timing_select_button">10.00</button>
        
    </div>
    </nav>

     <div class="seatscontainer">
        <div class="leftseatsheader">
        <div class="leftseats">
         <div class="row">A</div>
         <div class="seat"> <button class="seatbut"><a href="payment.php" onclick="myconfirm()" style="text-decoration:none; color: #2dc492;" target="_blank" onclick="confirm">1</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
        </div>

        <div class="leftseats">
            <div class="row">B</div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
           </div>

           <div class="leftseats">
            <div class="row">C</div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
           </div>

           <div class="leftseats">
            <div class="row">D</div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
           </div>

           <div class="leftseats">
            <div class="row">E</div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
           </div>

           <div class="leftseats">
            <div class="row">F</div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
            <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
           </div>

        </div>
        

        <div class="rightseatsheader">
            <div class="rightseats">
                <div class="row">G</div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
            </div>
           
            <div class="rightseats">
                <div class="row">H</div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
               </div>
    
               
               <div class="rightseats">
                <div class="row">I</div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
         <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
               </div>
    
               
               <div class="rightseats">
                <div class="row">J</div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
               </div>
    
               
               <div class="rightseats">
                <div class="row">K</div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
               </div>
    
               
               <div class="rightseats">
                <div class="row">L</div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">1</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">2</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">3</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">4</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">5</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">6</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">7</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">8</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">9</button></a></div>
                <div class="seat"> <button class="seatbut"><a href=payment.php style="text-decoration:none; color: #2dc492;" target="_blank">10</button></a></div>
               </div>
    
               
               
            </div>

            </div>
 
       
            <div class="screen">
                <p>Screen Here</p>
              </div>
    





</body>


<script>
    function myconfirm(){
           confirm("Are you Sure you want to book your Seat");
        
    }
 
 
 </script>
 






</html>