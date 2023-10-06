<?php
 include "boilerplate2.html";
  session_start();
   if(!empty($_SESSION['admin_id']) OR !empty($_SESSION['user_id'])){

  if(isset($_POST['unbook'])){

   $room2_id= $row['room2_id'];
     $connection= mysqli_connect("localhost","root","");
     
     $db=mysqli_select_db($connection,"login_sample_db");
       

     $sql = "DELETE FROM single_ac WHERE room2_id = $room2_id";
    // DELETE FROM single_ac WHERE room2_id = 2
     $query_run=mysqli_query($connection,$query);
    
    if($query_run){
     
        echo "success";
    
    }
  }
    
}
    //  if($row['room3_id']){
    //    $query="DELETE FROM single_non_ac WHERE room1_id=$row" ;
    // }
     
    //  if($row['room1_id']){
    //     $query="TRUNCATE TABLE single_ac" ;
    // }
    //   if($row['room1_id']){
    //     $query="TRUNCATE TABLE double_non_ac" ;
    //    }
    //   if($row['room1_id']){
    //     $query="TRUNCATE TABLE double_ac" ;
    //    }
    //  $query_run = mysqli_query($connection,$query);
    //   header("Location:redirect.php");
?>