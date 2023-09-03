<!-- <?php
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
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>

 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
   

.cardWrap {
  width: 50em;
  margin: 3em auto;
  color: #fff;
  font-family: sans-serif;
}

.card {
  background: linear-gradient(to bottom, red 0%, red 26%, grey 26%, grey 100%);
  height: 20em;
  float: left;
  position: relative;
  padding: 1em;
  margin-top: 100px;
}

.cardLeft {
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
  width: 30em;
}

.cardRight {
  width: 10em;
  border-left: .18em dashed #fff;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  &:before,
  &:after {
    content: "";
    position: absolute;
    display: block;
    width: .9em;
    height: .9em;
    background: #fff;
    border-radius: 50%;
    left: -.5em;
  }
  &:before {
    top: -.4em;
  }
  &:after {
  bottom: -.4em;
  }
}

h1 {
  font-size: 1.1em;
  margin-top: 0;
  span {
    font-weight: normal;
  }
}

.title, .name, .seat, .time {
  text-transform: uppercase;
  font-weight: normal;
  h2 {
    font-size: .9em;
    color: #525252;
    margin: 0;
   }
  span {
    font-size: .7em;
    color: #a2aeae;
  }
}

.title {
  margin: 2em 0 0 0;
}

.name, .seat {
  margin: .7em 0 0 0;
}

.time {
  margin: .7em 0 0 1em;
}

.seat, .time {
  float: left;
}

.eye {
  position: relative;
  width: 2em;
  height: 1.5em;
  background: #fff;
  margin: 0 auto;
  border-radius: 1em/0.6em;
  z-index: 1;
  &:before, &:after {
    content:"";
    display: block;
    position: absolute;
    border-radius: 50%;
  }
  &:before {
    width: 1em;
    height: 1em;
    background: red;
    z-index: 2;
    left: 8px;
    top: 4px;
  }
  &:after {
  width: .5em;
  height: .5em;
  background: #fff;
  z-index: 3;
  left: 12px;
  top: 8px;
  }
}

.number {
  text-align: center;
  text-transform: uppercase;
  h3 {
    color: red;
    margin: .9em 0 0 0;
    font-size: 2.5em;
    
  }
  span {
    display: block;
    color: #a2aeae;
  }
}


        </style>
</head>
<body>
    
  <div class="cardWrap">
    <div class="card cardLeft">
      <?php
        
        include '_dbconnect.php';
        $cid=$_GET['cityid'];
        $mid=$_GET['movieid'];
        $tid=$_GET['tid'];
        $sql="SELECT * FROM `theatres1` Where `t_id`='$tid' and `city_id`='$cid' and `movie_id`='$mid'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
        $tname=$row['t_name'];
        $tadd=$row['t_address'];
        echo'<div class="theaters"> <a href="payment.php"?tid='.$tid.'&movieid='.$mid.'&cityid='.$cid.'" target="_blank" class="theaterslist"> '.$tname.'</a>';
       
      }

      ?>
      </div>


      <div class="title">
        <h2>How I met your Mother</h2>
        <span>movie</span>
      </div>
      <div class="name">
        <h2>Vladimir Kudinov</h2>
        <span>name</span>
      </div>
      <div class="seat">
        <h2>156</h2>
        <span>seat</span>
      </div>
      <div class="time">
        <h2>12:00</h2>
        <span>time</span>
      </div>
      
    </div>
    <div class="card cardRight">
      <div class="eye"></div>
      <div class="number">
        <h3>156</h3>
        <span>seat</span>
      </div>
      <div class="barcode"></div>
    </div>
  
  </div>

</body>
</html>


