<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Seats</title>

    <style>
        body {
            background: url('images/background.jpg');
        }


        .navigationofmovies {
            display: flex;


            height: 70px;
            background: #333545;

            margin-top: -10px;
            padding: 5px 30px;

            justify-content: space-between;

            opacity: 0.9;


        }

        #title1 {

            display: flex;
            font-size: 34px;
            padding: 27px 0px;
            color: white;


        }

        #title1 img {
            width: 50px;
            height: 50px;
        }

        .navigationofseats1 {
            background-color: #1f2533;
            padding: 15px;
            color: #fff;
            opacity: 0.9;

        }

        .timings {
            background-color: #f3f3f3;
            padding: 7px 30px 7px 30px;
            opacity: 0.96;

        }


        .seatscontainer {
            display: flex;
            margin-top: 30px;
            justify-content: center;
        }

        .leftseatsheader {

            background-color: black;
            opacity: 0.9;
            border: 3px solid #2dc492;
            margin-right: 20px;
            width: 455px;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 4px 24px;
            border-radius: 10px;
        }

        .leftseats {
            display: flex;
            display: flex;
            justify-content: space-around;


        }

        .rightseatsheader {

            background-color: black;
            opacity: 0.9;
            border: 3px solid #2dc492;
            margin-right: 20px;
            width: 455px;
            height: 400px;
            display: flex;

            flex-direction: column;
            justify-content: space-around;
            padding: 4px 24px;
            border-radius: 10px;

        }

        .rightseats {
            display: flex;
            display: flex;
            justify-content: space-around;


        }

        .seat {
            width: 20px !important;
            height: 20px !important;

            border-radius: 26%;
            color: #666;
            padding: 5px;
            margin: 2px;
            text-align: center;
        }



        .timing1 input[type="checkbox"] {
            position: absolute;
            opacity: 0;


        }

        .timing1 input[type="checkbox"]:checked+label {

            background-color: #69d8b5;
            cursor: pointer;
            color: white;

        }

        .timing1 input[type="checkbox"]:hover {
            cursor: pointer;
        }




        .timing1 label {

            position: relative;
            width: 100px;
            height: 25px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5rem;
            padding: 4px 0;
            background-color: #fff;
            color: #2dc492;
            border: 1px solid #2dc492;
            padding: 4px 10px 4px 10px;
            border-radius: 3px;

            text-shadow: 3px 3px 5px 5px black;
        }



        .timing1 label:hover {
            cursor: pointer;
            box-shadow: 0px 0 7px 3px rgb(231, 130, 130);

        }


        .seatbooking {
            display: flex;
            flex-direction: column;

            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .seatsRow {
            display: flex;
        }


        .seats {
            display: flex;

            padding: 5px;
            position: relative;
        }

        .seats:nth-child(3) {
            margin-right: 9%;
        }

        .seats:nth-child(8) {
            margin-right: 9%;
        }

        .seats input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }

        .seats input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }

        .seats input[type="checkbox"]:hover {
            cursor: pointer;
        }

        .seats input[type="checkbox"]:checked+label {
            background: rgb(231, 130, 130);
            animation-name: rotate;
            animation-duration: 0.5s;
            animation-iteration-count: 1;

        }



        .seats label {

            position: relative;
            width: 35px;
            height: 25px;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5rem;
            padding: 4px 0;
            color: #fff;
            background: #2dc492;
            border-radius: 2px;
            text-shadow: 3px 3px 5px 5px black;
        }

        .seats label:hover {
            cursor: pointer;
            box-shadow: 0px 0 7px 3px #ccc;

        }

        /* .bookbutton  {
            width: 210px;
            height: 55px;
            margin-top: 40px;
            margin-left: 90px;
            background-color: rgb(248, 68, 100);
            border-radius: 5px;
            border: rgb(248, 68, 100);
            margin-bottom: 30px;
            display: flex;
            justify-content:center;
            align-items: center;
            
        } */
        input[type="submit"]{
            width: 210px;
            height: 55px;
            margin-top: 40px;
            margin-left: 90px;
            background-color: rgb(248, 68, 100);
            border-radius: 5px;
            border: rgb(248, 68, 100);
            margin-bottom: 30px;
            display: flex;
            justify-content:center;
            align-items: center;
            font-size: 20px;
            color: rgb(255, 255, 255)
        }

        /* .bookbutton:hover {
            cursor: pointer;
            box-shadow: 0px 0 10px 10px #ccc;

        } */
        input[type="submit"]:hover{
            cursor: pointer;
            box-shadow: 0px 0 10px 10px #ccc;
        }
        .spanclass{
            cursor: pointer;
            font-family: 'Golos Text', sans-serif;
            color:white;
        }
    
        .spanclassRs{
            
            padding:0 5px;
            font-family: 'Golos Text', sans-serif;
            color:white;
        }
        #amountdisplay{
            
            font-family: 'Golos Text', sans-serif;
            color:white;
        }
        .screen {
            background-color: black;
            opacity: 0.9;
            border: 3px solid #2dc492;
            display: flex;
            width: 550px;
            margin: auto;
            margin-top: 20px;
            margin-right: 344px;
            justify-content: center;

            border-radius: 5px;
            font-size: 2rem;
            color: white;
        }







        @keyframes rotate {
            100% {
                transform: rotate(360deg)
            }
        }
    </style>



</head>

<body>
        <form action="payment.php" method="post">

    <nav class="navigationofmovies">
        <div id="content1">
            <p>Select Seats</p>
        </div>

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

            <input type="checkbox" id="time1" value="9.00" onclick="click()" />
            <label for="time1">9.00</label>

            <input type="checkbox" id="time2" value="1.00" onclick="click()" />
            <label for="time2">1.00</label>

            <input type="checkbox" id="time3" value="4.00" onclick="click()" />
            <label for="time3">4.00</label>

            <input type="checkbox" id="time4" value="7.00" onclick="click()" />
            <label for="time4">7.00</label>

            <input type="checkbox" id="time5" value="10.00" onclick="click()" />
            <label for="time5">10.00</label>



        </div>
    </nav>

    <div class="seatbooking">
        <div class="seatsRow" id="Row1">

            <div class="seats">
                <input type="checkbox" id="1A" value="1A" name="checklist[]" onclick="click()" />
                <label for="1A">1A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1B" value="1B"   name="checklist[]" onclick="click()" />
                <label for="1B">1B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1C" value="1C"  name="checklist[]" onclick="click()" />
                <label for="1C">1C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1D" value="1D"  name="checklist[]" onclick="click()" />
                <label for="1D">1D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1E" value="1E" name="checklist[]" onclick="click()" />
                <label for="1E">1E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1F" value="1F" name="checklist[]" onclick="click()" />
                <label for="1F">1F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1G" value="1G"  name="checklist[]" onclick="click()" />
                <label for="1G">1G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1H" value="1H"  name="checklist[]" onclick="click()" />
                <label for="1H">1A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1I" value="1I"  name="checklist[]" onclick="click()" />
                <label for="1I">1I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1J" value="1J"  name="checklist[]" onclick="click()" />
                <label for="1J">1J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1K" value="1K"  name="checklist[]" onclick="click()" />
                <label for="1K">1K</label>
            </div>

        </div>
        <!-- end of the row -->



        <div class="seatsRow" id="Row2">

            <div class="seats">
                <input type="checkbox" id="2A" value="2A"  name="checklist[]" onclick="click()" />
                <label for="2A">2A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2B" value="2B"  name="checklist[]" onclick="click()" />
                <label for="2B">2B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2C" value="2C"  name="checklist[]" onclick="click()" />
                <label for="2C">2C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2D" value="2D"  name="checklist[]" onclick="click()" />
                <label for="2D">2D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2E" value="2E"  name="checklist[]" onclick="click()" />
                <label for="2E">2E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2F" value="2F"  name="checklist[]" onclick="click()" />
                <label for="2F">2F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2G" value="2G"  name="checklist[]" onclick="click()" />
                <label for="2G">2G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2H" value="2H"  name="checklist[]" onclick="click()" />
                <label for="2H">2A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2I" value="2I"  name="checklist[]" onclick="click()" />
                <label for="2I">2I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2J" value="2J"  name="checklist[]" onclick="click()" />
                <label for="2J">2J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="2K" value="2K"  name="checklist[]" onclick="click()" />
                <label for="2K">2K</label>
            </div>

        </div>
        <!-- end of the row -->



        <div class="seatsRow" id="Row3">

            <div class="seats">
                <input type="checkbox" id="3A" value="3A"  name="checklist[]" onclick="click()" />
                <label for="3A">3A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3B" value="3B"  name="checklist[]" onclick="click()" />
                <label for="3B">3B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3C" value="3C"  name="checklist[]" onclick="click()" />
                <label for="3C">3C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3D" value="3D"  name="checklist[]" onclick="click()" />
                <label for="3D">3D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3E" value="3E"  name="checklist[]" onclick="click()" />
                <label for="3E">3E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3F" value="3F"  name="checklist[]" onclick="click()" />
                <label for="3F">3F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3G" value="3G"  name="checklist[]" onclick="click()" />
                <label for="3G">3G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3H" value="3H"  name="checklist[]" onclick="click()" />
                <label for="3H">3H</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3I" value="3I"  name="checklist[]" onclick="click()" />
                <label for="3I">3I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3J" value="3J"  name="checklist[]" onclick="click()" />
                <label for="3J">3J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="3K" value="3K"  name="checklist[]" onclick="click()" />
                <label for="3K">3K</label>
            </div>

        </div>
        <!-- end of the row -->


        <div class="seatsRow" id="Row4">

            <div class="seats">
                <input type="checkbox" id="4A" value="4A"  name="checklist[]" onclick="click()" />
                <label for="4A">4A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4B" value="4B"  name="checklist[]" onclick="click()" />
                <label for="4B">4B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4C" value="4C"  name="checklist[]" onclick="click()" />
                <label for="4C">4C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4D" value="4D"  name="checklist[]" onclick="click()" />
                <label for="4D">4D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="1E" value="4E"  name="checklist[]" onclick="click()" />
                <label for="1E">1E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4F" value="4F"  name="checklist[]" onclick="click()" />
                <label for="4F">4F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4G" value="4G"  name="checklist[]" onclick="click()" />
                <label for="4G">4G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4H" value="4H"  name="checklist[]" onclick="click()" />
                <label for="4H">4A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4I" value="4I"  name="checklist[]" onclick="click()" />
                <label for="4I">4I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4J" value="4J"  name="checklist[]" onclick="click()" />
                <label for="4J">4J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="4K" value="4K"  name="checklist[]" onclick="click()" />
                <label for="4K">4K</label>
            </div>

        </div>
        <!-- end of the row -->


        <div class="seatsRow" id="Row5">

            <div class="seats">
                <input type="checkbox" id="5A" value="5A"  name="checklist[]" onclick="click()" />
                <label for="5A">5A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5B" value="5B"  name="checklist[]" onclick="click()" />
                <label for="5B">5B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5C" value="5C"  name="checklist[]" onclick="click()" />
                <label for="5C">5C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5D" value="5D"  name="checklist[]" onclick="click()" />
                <label for="5D">5D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5E" value="5E"  name="checklist[]" onclick="click()" />
                <label for="5E">5E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5F" value="5F"  name="checklist[]" onclick="click()" />
                <label for="5F">5F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5G" value="5G"  name="checklist[]" onclick="click()" />
                <label for="5G">5G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5H" value="5H"  name="checklist[]" onclick="click()" />
                <label for="5H">5A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5I" value="5I"  name="checklist[]" onclick="click()" />
                <label for="5I">5I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5J" value="5J"  name="checklist[]" onclick="click()" />
                <label for="5J">5J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="5K" value="5K"  name="checklist[]" onclick="click()" />
                <label for="5K">5K</label>
            </div>

        </div>
        <!-- end of the row -->


        <div class="seatsRow" id="Row6">

            <div class="seats">
                <input type="checkbox" id="6A" value="6A"  name="checklist[]" onclick="click()" />
                <label for="6A">6A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6B" value="6B"  name="checklist[]" onclick="click()" />
                <label for="6B">6B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6C" value="6C"  name="checklist[]" onclick="click()" />
                <label for="6C">6C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6D" value="6D"  name="checklist[]" onclick="click()" />
                <label for="6D">6D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6E" value="6E"  name="checklist[]" onclick="click()" />
                <label for="6E">6E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6F" value="6F"  name="checklist[]" onclick="click()" />
                <label for="6F">6F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6G" value="6G"  name="checklist[]" onclick="click()" />
                <label for="6G">6G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6H" value="6H"  name="checklist[]" onclick="click()" />
                <label for="6H">6H</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6I" value="6I"  name="checklist[]" onclick="click()" />
                <label for="6I">6I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6J" value="6J"  name="checklist[]" onclick="click()" />
                <label for="6J">6J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="6K" value="6K"  name="checklist[]" onclick="click()" />
                <label for="6K">6K</label>
            </div>

        </div>
        <!-- end of the row -->


        <div class="seatsRow" id="Row7">

            <div class="seats">
                <input type="checkbox" id="7A" value="7A"  name="checklist[]" onclick="click()" />
                <label for="7A">7A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7B" value="7B"  name="checklist[]" onclick="click()" />
                <label for="7B">7B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7C" value="7C"  name="checklist[]" onclick="click()" />
                <label for="7C">7C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7D" value="7D"  name="checklist[]" onclick="click()" />
                <label for="7D">7D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7E" value="7E"  name="checklist[]" onclick="click()" />
                <label for="7E">7E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7F" value="7F"  name="checklist[]" onclick="click()" />
                <label for="7F">7F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7G" value="7G"  name="checklist[]" onclick="click()" />
                <label for="7G">7G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7H" value="7H"  name="checklist[]" onclick="click()" />
                <label for="7H">7H</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7I" value="7I"   name="checklist[]" onclick="click()" />
                <label for="7I">7I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7J" value="7J"  name="checklist[]" onclick="click()" />
                <label for="7J">7J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="7K" value="7K"  name="checklist[]" onclick="click()" />
                <label for="7K">7K</label>
            </div>

        </div>
        <!-- end of the row -->


        <div class="seatsRow" id="Row8">

            <div class="seats">
                <input type="checkbox" id="8A" value="8A"   name="checklist[]" onclick="click()" />
                <label for="8A">8A</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8B" value="8B"  name="checklist[]" onclick="click()" />
                <label for="8B">8B</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8C" value="8C"  name="checklist[]" onclick="click()" />
                <label for="8C">8C</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8D" value="8D"  name="checklist[]" onclick="click()" />
                <label for="8D">8D</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8E" value="8E"  name="checklist[]" onclick="click()" />
                <label for="8E">8E</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8F" value="8F"  name="checklist[]" onclick="click()" />
                <label for="8F">8F</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8G" value="8G"  name="checklist[]" onclick="click()" />
                <label for="8G">8G</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8H" value="8H"  name="checklist[]" onclick="click()" />
                <label for="8H">8H</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8I" value="8I"  name="checklist[]" onclick="click()" />
                <label for="8I">8I</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8J" value="8J"  name="checklist[]" onclick="click()" />
                <label for="8J">8J</label>
            </div>

            <div class="seats">
                <input type="checkbox" id="8K" value="8K"   name="checklist[]" onclick="click()" />
                <label for="8K">8K</label>
            </div>

        </div>
        <!-- end of the row -->

        <div class="screen">
            <p>Screen Here</p>
        </div>


          
            <input type="submit" id="bookbut" name="submit" value="submit">
            <!-- <span class="spanclass" onclick="butclick()" style="font-weight: 500;
            font-size: 20px;
            color: rgb(255, 255, 255)">Book Tickets</span><span class="spanclassRs">Rs. </span><span id="amountdisplay">0</span></button> -->
     








    </div>

    
    </form>

    <div>
    <?php
        
        include '_dbconnect.php';
        $cid=$_GET['cityid'];
        $mid=$_GET['movieid'];
        $tiid=$_GET['tid'];
        

        $sql="SELECT * FROM `theatres1` Where  `t_id`='$tiid' and `city_id`='$cid' and `movie_id`='$mid'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
        $tid=$row['t_id'];
        echo'<a href="payment2.php?tid='.$tid.'&movieid='.$mid.'&cityid='.$cid.'" target="_blank" class="seatbookinglist"></a>';
       
        }

      ?>

    </div>




    <script src="javascript.js"></script>
</body>

</html>