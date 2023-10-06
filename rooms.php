<?php

include "boilerplate2.html";

session_start();

if(!empty($_SESSION['user_id']) OR !empty($_SESSION['admin_id'])){

     if(isset($_POST['unbook'])){

          $room2_id = $_GET['rid'];

          $connection= mysqli_connect("localhost","root","");
            
          $db=mysqli_select_db($connection,"login_sample_db");
           
          $sql = "DELETE FROM single_ac WHERE room2_id = $room2_id";

           // DELETE FROM single_ac WHERE room2_id = 2

            $query_run=mysqli_query($connection,$sql);
           
           if($query_run){
            
               echo "success";
           
           }
         }
           
?>


    <body>
    
            <div>

            <a href="logout.php" class="float-right mr-5"><button class="btn btn-primary">Logout</h3></button></a>
            <a href="index.php" class="float-right mr-5"><button class="btn btn-primary">Home Page</h3></button></a>

         
            <h1 style="color:#014421; font-family: 'Dancing Script', cursive;font-size: 45px;text-align:center" class="mt-5 mb-4">Room Booking Page</h1><br>
       
          </div>
        

          <div class="container admin-show-room mb-5 pb-5">
  
          <div class="row offset-1">
    
          <div class="col-md-12">
     
          <h4 class=" pt-2 pb-2 pl-4 mt-5 offset-4">Single AC Rooms</h4><br>
 
 <?php
    
    $connection= mysqli_connect("localhost","root","");
     
    $db=mysqli_select_db($connection,"login_sample_db");
    
    $query="select * from single_ac";
    
    $query_run=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($query_run)){
        
        ?>
         
         <div>
          
         <table class=" table-bordered p-5 mb-3 ">
             
         <th class="pt-2 pb-2 pl-5 pr-5">Room No:
                  
         <?php echo $row['room_no'];?>
             
     </th>
             
     <td class="pt-2 pb-2 pl-5 pr-5">
                
                <p>Room Status:<?php
                  
                  if($row['status']==0){echo"<b>Available</b>";} else{echo"<b>Already Booked</b>";}
                  
                  ?></p>
              
          </td>
              
          <td class="pt-2 pb-2 pl-5 pr-5">
                 
          <a href="hotelrooms.php?rid=<?php echo $row['room2_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>
             
     </td>
             
     <td class="pt-2 pb-2 pl-5 pr-5">
       
     <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
          <a href="rooms.php?rid=<?php echo $row['room2_id'];?>" name="unbook" class="btn btn-danger  <?php if($row['status']==1){echo "active";}else{echo"disabled";}?>">Unbook</a>
     </form>  
          
</td>  
         
</div>
        
        <?php
   
}
    
    ?>
  
  </table>

</div>

<!-----------------Double Non Ac Rooms-------------------->

<div class="col-md-12">

<h4 class=" pt-2 pb-2 pl-4 offset-4 mt-2">Double Non AC Rooms</h4><br>

  <?php

     $connection= mysqli_connect("localhost","root","");

     $db=mysqli_select_db($connection,"login_sample_db");

     $query="select * from double_non_ac";

     $query_run=mysqli_query($connection,$query);

     while($row=mysqli_fetch_assoc($query_run)){

          ?>

          <div>

          <table class=" table-bordered p-5 mb-3">

             <th class="pt-2 pb-2 pl-5 pr-5">Room No:

                   <?php echo $row['room_no'];?>

             </th>

              <td class="pt-2 pb-2 pl-5 pr-5">

                  <p>Room Status:<?php

                   if($row['status']==0){echo"<b> Available</b>";} else{echo"<b> Already Booked</b>";}

                   ?></p>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

                   <a href="hotelrooms.php?rid=<?php echo $row['room3_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

              <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

                   <a href="rooms.php?rid=<?php echo $row['room3_id'];?>" name="unbook" class="btn btn-danger <?php if($row['status']==1){echo "active";}else{echo"disabled";}?>">Unbook</a>

              </form>

          </td>  

          </div>

          <?php

     }

     ?>

     </table>

</div>

<!-----------Double AC Rooms------------------->


<div class="col-md-12">

<h4 class=" pt-2 pb-2 pl-4 offset-4 mt-2">Double AC Rooms</h4><br>

  <?php

     $connection= mysqli_connect("localhost","root","");

     $db=mysqli_select_db($connection,"login_sample_db");

     $query="select * from double_ac";

     $query_run=mysqli_query($connection,$query);

     while($row=mysqli_fetch_assoc($query_run)){

          ?>

          <div>

          <table class=" table-bordered p-5 mb-3">

             <th class="pt-2 pb-2 pl-5 pr-5">Room No:

                   <?php echo $row['room_no'];?>

             </th>

              <td class="pt-2 pb-2 pl-5 pr-5">

                  <p>Room Status:<?php

                   if($row['status']==0){echo"<b>Available</b>";} else{echo"<b>Already Booked</b>";}

                   ?></p>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

                   <a href="hotelrooms.php?rid=<?php echo $row['room4_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

              <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

                   <a href="rooms.php?rid=<?php echo $row['room4_id'];?>" name="unbook" class="btn btn-danger <?php if($row['status']==1){echo "active";}else{echo"disabled";}?>">Unbook</a>
          
              </form>

               </td>  
          
          </div>
          
          <?php
   
}
    
    ?>
    
</table>

</div>

<!-------------Single Non Ac Rooms------------------------->

<div class="col-md-12">

<h4 class=" pt-2 pb-2 pl-4 offset-4 mt-2">Single Non AC Rooms</h4><br>

  <?php

     $connection= mysqli_connect("localhost","root","");

     $db=mysqli_select_db($connection,"login_sample_db");

     $query="select * from single_non_ac";

     $query_run=mysqli_query($connection,$query);

     while($row=mysqli_fetch_assoc($query_run)){

          ?>

      <div>

          <table class=" table-bordered p-5 mb-3">

             <th class="pt-2 pb-2 pl-5 pr-5">Room No:

                   <?php echo $row['room_no'];?>

             </th>

              <td class="pt-2 pb-2 pl-5 pr-5">

                  <p>Room Status:<?php

                   if($row['status']==0){echo"<b>Available</b>";} else{echo"<b>Already Booked</b>";}

                   ?></p>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

                   <a href="hotelrooms.php?rid=<?php echo $row['room1_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

              <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

                   <a href="rooms.php?rid=<?php echo $row['room1_id'];?>" name="unbook" class="btn btn-danger <?php if($row['status']==1){echo "active";}else{echo"disabled";}?>">Unbook</a>

              </form>

          </td>  

          </div>

          <?php
     }

     ?>

     </table>

   </div>

</div>
   
    </body>

  </html>

<?php
}
else{
   header("location:http://localhost/New%20folder/signin.php");
}
?>