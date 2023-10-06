<?php
include "boilerplate2.html";

session_start();

if(!empty($_SESSION['user_id']) OR !empty($_SESSION['admin_id'])){

?>

<body>
    
     <div>

           <a href="logout.php" class="float-right mr-5"><button class="btn btn-primary">Logout</h3></button></a>

           <a href="index.php" class="float-right mr-5"><button class="btn btn-primary">Home Page</h3></button></a>

           <h1 style="color:#014421; font-family: 'Dancing Script', cursive;font-size: 45px;" class="mt-5 mb-4">Room Booking Page</h1><br>

     </div>

 <!----------------Single ac Rooms------------------->

     <div class="container">

        <div class="row show-room">

          <div class="col-md-9 offset-2">

              <h4 class=" pt-2 pb-2 pl-4 mt-4 offset-3"> Single AC Rooms</h4><br><br>

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

                   if($row['status']==0){echo"<b>   Available</b>";} else{echo"<b>   Already Booked</b>";}

                   ?></p>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

                   <a href="hotelrooms.php?rid=<?php echo $row['room2_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>

              </td>
            
          </div>

          <?php

     }

     ?>

     </table>

</div><br>
 
<!----------------Double Non Ac Rooms------------------------>

<div class="col-md-12">

      <h4 class=" pt-2 pb-2 pl-4 offset-3">Double Non AC Rooms</h4><br><br>
 
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
              
          </div>
          
          <?php
     
             }
     
          ?>

     </table>

</div><br>

<!-----------Double AC Rooms------------------->

<div class="col-md-12">

    <h4 class="pt-2 pb-2 pl-4 offset-3">Double AC Rooms</h4><br><br>

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

                   if($row['status']==0){echo"<b> Available</b>";} else{echo"<b> Already Booked</b>";}

                   ?></p>

              </td>

              <td class="pt-2 pb-2 pl-5 pr-5">

                   <a href="hotelrooms.php?rid=<?php echo $row['room4_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>

              </td>
              
          </div>

          <?php

     }

     ?>

     </table>

</div><br>

<!-------------Single Non Ac Rooms------------------------->


<div class="col-md-12 mb-5">

     <h4 class="pt-2 pb-2 pl-4 offset-3">Single Non AC Rooms</h4><br><br>

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

                   if($row['status']==0){echo"<b>  Available</b>";} else{echo"<b>  Already Booked</b>";}
                   
                   ?></p>
              
          </td>
              
          <td class="pt-2 pb-2 pl-5 pr-5">
                  
                <a href="hotelrooms.php?rid=<?php echo $row['room1_id'];?>" class="btn btn-success <?php if($row['status']==0){echo "active";}else{echo"disabled";}?>">Book</a>
          
               </td>
             
          </div>

          <?php

              }
     
     ?>

     </table>

   </div>

</div><br>


     
    </body>

</html>

    <?php

}

else{

   header("location:http://localhost/New%20folder/signin.php");

}

?>