
<?php

  
    include "boilerplate2.html";
   
    $room_no=$_GET['room_no'];

    $room_type=$_GET['room_type'];

    $connection= mysqli_connect("localhost","root","");
        
    $db=mysqli_select_db($connection,"login_sample_db");

    if($room_type== "single_ac"){

        

        $sql="SELECT * FROM single_ac WHERE room_no=$room_no ";

        $query_run = mysqli_query($connection,$sql);

        while($row = mysqli_fetch_assoc($query_run)){
           
            include("booking-conf-details.php");

        }

    }
    
    if($room_type== "single_non_ac"){
        
        $sql="SELECT * FROM single_non_ac WHERE room_no='$room_no' ";

        $query_run = mysqli_query($connection,$sql);

        while($row = mysqli_fetch_assoc($query_run)){
           
            include("booking-conf-details.php");

        }

    }
    if( $room_type == "double_ac"){
        
        $sql="SELECT * FROM double_ac WHERE room_no=$room_no";

        $query_run = mysqli_query($connection,$sql);

        while($row = mysqli_fetch_assoc($query_run)){
           
            include("booking-conf-details.php");

        }

    }
    if($room_type== "double_non_ac"){
        
        $sql="SELECT * FROM double_non_ac WHERE room_no='$room_no'";

        $query_run = mysqli_query($connection,$sql);

        while($row = mysqli_fetch_assoc($query_run)){
           
            include("booking-conf-details.php");

        }

    }

?>
   


     