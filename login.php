
<?php

$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){


    $servername = "try-main-db-1";
    $username = "root";
    $password = "1234";
    $database = "ticketflickdb";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

   $usernamelog=$_POST['username'];
   $pass=$_POST['password'];
       
     
   $sql = "Select * from userdetails1 where username='$usernamelog'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
    

   if($num==1){
    
    while($row=mysqli_fetch_assoc($result)){
        if(password_verify($pass, $row['password'])){
            $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$usernamelog;
    header("location: Firstpageserver.php");

        }
        else{
            $showError = "Wrong Password!!Enter the correct Password ";
        }
    }



   

} 
else{
    $showError = "Sorry Cant Find your Account.Please Sign up";
}




   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<style>


body{
 

  background-image: url(images/logincover.jpg);
  background-repeat: no-repeat;


}

.navigationofmovies{
    display: flex;
    width: 100%;
    
     height: 88px;
       background: #333545;
       
           padding :5px 6px;
      
       justify-content: space-between;
       opacity:0.8;
       
       
       
       
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

  .logincontainer{
     display: flex;
     flex-direction:column;
     justify-content: center;
     align-items:center;
     margin-top:80px;
  }


  input[type=text] {
  width: 450px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.1);

}

input[type=password] {
  width: 450px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.1);

}

button[type="submit"] {
    width: 450px;
  background: #ffb37b;
  border: 1px solid rgba(0, 0, 0, 0.1);
  padding: 18px;
  font-size: 20px;
  border-radius: 3px;
  cursor: pointer;
  margin-top: 20px;
  color:  black;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  margin-bottom: 30px;
}





  label{
   color: #ffb37b;
   font-weight:bold;
   font-size: 1.5rem;
}
 .text-center{
        color:#ffb37b;
 }


</style>



  <body>
    
<nav class="navigationofmovies">
        <div id="content1"><p>Login</p></div>
        
        <div id="title1">
            <div>Ticket</div>
            <img src="images/logo.ico">
            <div>Flick</div>
    </div>
    
    </nav>

    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>




    <div class="logincontainer">
    
    <h1 class="text-center">Login Here</h1> 
    <form action="index.php" method="post">
    
        <div class="form-group"> 
            <label for="username">Username</label> 
             <br>
        <input type="text" class="form-control" id="username"
            name="username" aria-describedby="emailHelp"  required>    
        </div>


        
      
    
        <div class="form-group"> 
            <label for="password">Password</label>
            <br> 
            <input type="password" class="form-control"
            id="password" name="password"  required> 
        </div>
        
    
    
          
        <button type="submit" class="btn btn-primary">
        Login
        </button> 
    </form> 
</div>










    
</body>
</html>