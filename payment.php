<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>


 <style>

body{
    background: url(images/background.jpg);
    }
    .navigationofmovies{
    display: flex;
    width: 100%;
    
     height: 70px;
       background: #333545;
       
      margin-top: -10px;
       padding :5px 6px;
       margin-left: -6px;
       justify-content: space-between;
       opacity:0.9;
       
       
       
       
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
         
         font-size:2.0rem;
         color: white;
  }
 .paymentcontainer{
            display: flex;
            margin-top: 20px;
 }


 .payment{
      border-radius: 9px;
      width: 1000px;
    
      margin-right: 40px;

      
       
 }

 .bill{
    border-radius: 9px;
      width: 300px;
      border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    background-color: black;
    opacity:0.9;
 }

 .amount{
    display: flex;
    width: 300px;
    justify-content: space-between;
 }

 .paybut{
    align-self: center;
    margin-top: 25px;
      
 }
 
 .bill h3{
    font-size: 27px;
    color: #0e1422;
    padding-bottom: 8px;
    
}
.bill1{
    width:300px;
   
   
    background: url(images/billimage.jpg);
    background-repeat: no-repeat;
    background-size: 300px;
 
    
    opacity: 0.95;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
   
}
 
 .small{
    font-size: 15px;
    font-style: inherit;
    padding-bottom: 13px;
    color: #814b24;
 }
 .seats{
    
    font-size: 15px;
    font-style: inherit;
    padding-bottom: 13px;
    color: #814b24;

 }

 .medium{
    font-size: 19px;
    color:#814b24;
 }

 .amount{
    background-color: #fffcdc;
    
    padding-top: 10px;
    padding-bottom: 5px;
 }
 .amountsmall{
    font-size: 15px;
    color: #666;
    font-style: inherit;
    padding-top: 8px;
 }
 .amountlarge{
    font-size:25px;
 }

 #paybut{
     width: 230px;
     height: 40px;
     background-color: rgb(248, 68, 100);
    border-radius: 10px;
    border: rgb(248, 68, 100);
}
.paybut{
    margin-bottom: 10px;
    align-self: center;
}


.payment{
    display: flex;
    flex-direction: column;
    background-color:black;
    opacity: 0.9;

}

.paymentoption{
    display: flex;
    
   padding-top: 10px;
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 10px;
    justify-content: space-around;
    background-color: rgb(176, 200, 201);
    padding-bottom: 20px;
    border-radius: 5px;
}
.optionbut{
    width: 300px;
    height: 59px;
    font-size: 1.5rem;
    
    
}
.optionbut:hover{
    background-color:  #24a0ed;
    border: #24a0ed;
    border-radius: 6px;
}


.optionbut1{
    width: 300px;
    height: 59px;
    font-size: 1.5rem;
    background-color:  #24a0ed;
    border: #24a0ed;
    border-radius: 6px;
      
}
input[type=text] {
  width: 600px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=number] {
  width: 600px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

.paymentdetails{
    margin-top: 10px;
    margin-left: 10px;
      
    
}
.paymentdetails p{
    font-size: 1.2rem;
    color:white;

}



input[type=date] {
  width: 400px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 350px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;

}
.paymentbutton{
    margin-top: 20px;
    align-self: center;
    padding-bottom: 20px;
    padding-top: 20px;
    background-color: rgb(176, 200, 201);
    border-radius: 5px;
    padding: 10px 10px 10px 10px;
  
}
.confirmpay{
    width: 900px;
    height: 40px;
    font-size: 1.5rem;
    background-color:  #24a0ed;
    border: #24a0ed;
    border-radius: 12px;
  
    
}

.confirmpay:hover{
    
    background-color: rgb(248, 68, 100);
    border:  rgb(248, 68, 100);
    border-radius: 12px;
  
    
}




 </style>



</head>
<body>
    <nav class="navigationofmovies">
        <div id="content1"><p>Payment</p></div>
        
        <div id="title1">
            <div>Ticket</div>
            <img src="images/logo.ico">
            <div>Flick</div>
    </div>
    
    </nav>
    
  
 <div class="paymentcontainer">
    <div class="payment">
    

       
    <div class="paymentoption">
     <button class="optionbut1">Credit Card</button>
     <button class="optionbut">Online Booking</button>
     <button class="optionbut">Debit Card</button>
   </div>


 <div class="paymentdetails">
     
       <p> Card Owner</p>
        <br>
        <input type="text" placeholder="Card Owner Name" name="myname" >
         <br>
        <p> Card Number</p>
         <br>
         <input type="number" placeholder="Valid Card Number" name="cardno">
         <br>
         <p>Expiry Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;CCV Code</p>
         <br>
         <input type="date" name="mydate">
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
         
         <input type="password" name="mypass" placeholder="* * * * * * * * *">
     
     

 </div>

 <div class="paymentbutton">
 
  <div class="paymentbutton1">
    <button class="confirmpay">Confirm Payment</button>
  </div>

 </div>








    </div>


    <div class="bill">
         <div class="bill1">
    <h2>Raanjhana</h2>
     <div class="small">
        <p>PVR: 4DX, Orion Mall, Dr Rajkumar Road</p>
     </div>
     <div class="seats">
     <?php
if(isset($_POST['submit'])){
    if(!empty($_POST['checklist'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['checklist']);
echo "You have booked ".$checked_count." tickets. <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['checklist'] as $selected) {
echo "<p>".$selected ."</p>";
}

}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>
</div>

     
    </div>
     <div class="amount">
        <div class="amountsmall">
            Amount Payable:
        </div>
     
        <div class="amountlarge">
            Rs.250
        </div>
     </div>

        <div class="paybut">
        <button id="paybut"><span style="font-weight: 500;
            font-size: 20px;
            color: rgb(255, 255, 255)">Pay Rs.250</span></button>
    </div>

    
    <?php
if(isset($_POST['submit'])){
    if(!empty($_POST['checklist'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['checklist']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['checklist'] as $selected) {
echo "<p>".$selected ."</p>";
}

}
else{
echo "<b>Please book atleast one ticket to proceed.</b>";
}
}
?>
</div>
</div>














</body>
</html>